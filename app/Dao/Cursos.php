<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'idcursos',
        'nome',
        'descricao',
        'dificuldade',
        'ativo',
        'data_inicio',
        'data_termino',
        'idritmo'
    ];
    
    public function ObterCursosArray(){
        
        $cursosArrays  =   array();
        
        $cursos    =   $this->all();
        
        foreach ($cursos as $value) {
            $cursosArrays[$value->idcursos] = $value->nome. ' ' .$value->dificuldade;
        }
        
        return $cursosArrays;
        
    }
    
}
