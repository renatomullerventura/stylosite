<?php

namespace App\Dao;
use DB;

use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    protected $fillable = [
        'idaulas',
        'dia_semana',
        'sala',
        'idcurso',
        'horario_inicial_previsao',
        'horario_final_previsao',
        'idprofessor',
        'idprofessora'
    ];
    
    public $rules = [
        'dia_semana' => 'required', 
        'horario_inicial_previsao'=>'required|date_format:H:i:s',
        'horario_final_previsao'=>'required|date_format:H:i:s',
        'idcurso' => 'required',
        'horario_inicial_previsao' => 'required',
        'horario_final_previsao' => 'required'
    ];
    
    protected $primaryKey = 'idaulas';
        
    public function obterGradeDeAulasMensal(){
        
        return
        $query = DB::table("aulas")
        ->join('cursos', 'cursos.idcursos', '=', 'aulas.idcurso')
        ->join('professores', function($join){
            $join->on('professores.idprofessores', '=', 'aulas.idprofessor');
            $join->orOn('professores.idprofessores', '=', 'aulas.idprofessora');
        })
        ->select(
              'aulas.idaulas'
             ,'aulas.dia_semana' 
             ,'aulas.horario_inicial_previsao' 
             ,'aulas.horario_final_previsao' 
             ,'cursos.nome' 
             ,'cursos.dificuldade' 
             ,'aulas.sala' 
             ,DB::raw("GROUP_CONCAT(professores.nome SEPARATOR ',') as professores")
        )
        ->groupBy(
             'aulas.horario_inicial_previsao' 
            ,'aulas.horario_final_previsao'
            ,'aulas.dia_semana'
            ,'aulas.sala'
            ,'aulas.idcurso'
        )
        ->orderBy('aulas.dia_semana', 'ASC')
        ->orderBy('aulas.horario_inicial_previsao', 'ASC')
        ->orderBy('aulas.sala', 'ASC')
        ->orderBy('professores.nome', 'ASC');
        
    }
    
    public function CarregaGradeAulas(){
        
        $grade = [
            0=>['Domingo',       array()],
            1=>['Segunda Feira', array()],
            2=>['Terça  Feira',  array()],
            3=>['Quarta Feira',  array()],
            4=>['Quinta Feira',  array()],
            5=>['Sexta Feira',   array()],
            6=>['Sábado',        array()]
        ];
        
        foreach ($this->obterGradeDeAulasMensal()->get() as $aulaDoDia) {
            
            $profs = explode("," , $aulaDoDia->professores);
            
            for($i = 0; $i < count($profs);$i++){
                $profs[$i] = '<a href="#'.str_replace(" ", "", $profs[$i]).'" class="scroll"> '.$profs[$i].'</a>';
            }
            
            $aulaDoDia->professores = implode(" e ", $profs);
            
            array_push($grade[$aulaDoDia->dia_semana][1], $aulaDoDia);
        }
        
        for($i = 0; $i < 7;$i++){
            if(count($grade[$i][1])==0){
                unset($grade[$i]);
            }
        }
        
        return $grade;
    
    }
    
    public function PreencherAula($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idaulas'])){
            $aula = $this->find($inputs['idaulas']);
        }else{
            $aula = $this;
        }
        
        isset($inputs['sala'])?$aula['sala'] = $inputs['sala']:null;
        isset($inputs['dia_semana'])?$aula['dia_semana'] = $inputs['dia_semana']:$aula['dia_semana'] = null;
        
        if(isset($inputs['horario_inicial_previsao'])){
            $aula['horario_inicial_previsao'] = date('H:i:s', mktime(explode(':', $inputs['horario_inicial_previsao'])[0], explode(':', $inputs['horario_inicial_previsao'])[1], explode(':', $inputs['horario_inicial_previsao'])[2]));
        }else{
            $aula['horario_inicial_previsao'] = date('H:i:s', time());
        }
        
        if(isset($inputs['horario_final_previsao'])){
            $aula['horario_final_previsao'] = date('H:i:s', mktime(explode(':', $inputs['horario_final_previsao'])[0], explode(':', $inputs['horario_final_previsao'])[1], explode(':', $inputs['horario_final_previsao'])[2]));
        }else{
            $aula['horario_final_previsao'] = date('H:i:s', time());
        }
        
        isset($inputs['idcurso'])?$aula['idcurso'] = $inputs['idcurso']:null;
        isset($inputs['idprofessor'])?$aula['idprofessor'] = $inputs['idprofessor']:null;
        isset($inputs['idprofessora'])?$aula['idprofessora'] = $inputs['idprofessora']:null;
        isset($inputs['deleted_at'])?$aula['deleted_at'] = $inputs['deleted_at']:$aula['deleted_at'] = null;
        
        return $aula;
        
    }
    
}
