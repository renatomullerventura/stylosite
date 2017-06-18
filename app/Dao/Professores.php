<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professores extends Model
{
    
    use SoftDeletes;
    
    protected $primaryKey = 'idprofessores';
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    protected $fillable =   [
        'idprofessores', 
        'nome', 
        'sobrenome', 
        'apelido', 
        'email', 
        'data_nascimento', 
        'sexo', 
        'descricao', 
        'ativo', 
        'fotoperfil', 
        'idescola', 
        'idparceiro', 
        'deleted_at', 
        'created_at', 
        'updated_at'
    ];
    
    public $rules = [
        'nome'=>'required', 
        'sobrenome'=>'string|max:128', 
        'apelido'=>'string|max:128', 
        'email'=>'email', 
        'sexo'=>'required|in:Feminino,Masculino', 
        'descricao'=>'string', 
        'ativo'=>'required', 
        //'fotoperfil'=>'', 
        'idescola'=>'required'
    ];
    
    public function ObterEscolas(){
        return $this->hasMany(Escolas::class);
    }
    
    public function ObterProfessoresArray($tipo = null){
        
        $profs  =   array();
        
        if($tipo == null){
            $professores    =   $this->all();
        }else if($tipo == 'Feminino'){
            $professores    =   $this->where('sexo', 'Feminino')->get();
        }else if($tipo == 'Masculino'){
            $professores    =   $this->where('sexo', 'Masculino')->get();   
        }
        
        foreach ($professores as $value) {
            $profs[$value->idprofessores] = $value->nome. ' ' .$value->sobrenome;
        }
        
        return $profs;
        
    }
    
    public function PreencherProfessor($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idprofessores'])){
            $prof = $this->find($inputs['idprofessores']);
        }else{
            $prof = $this;
        }
        
        isset($inputs['nome'])?$prof['nome'] = $inputs['nome']:null;
        isset($inputs['sobrenome'])?$prof['sobrenome'] = $inputs['sobrenome']:$prof['sobrenome'] = null;
        isset($inputs['apelido'])?$prof['apelido'] = $inputs['apelido']:$prof['apelido'] = null;
        isset($inputs['email'])?$prof['email'] = $inputs['email']:$prof['email'] = null;
        
        if(isset($inputs['data_nascimento'])){
            $prof['data_nascimento'] = date('Y-m-d 00:00:00', mktime(0, 0, 0, explode('/', $inputs['data_nascimento'])[1], explode('/', $inputs['data_nascimento'])[0], explode('/', $inputs['data_nascimento'])[2]));
        }else{
            $prof['data_nascimento'] = null;
        }
        isset($inputs['sexo'])?$prof['sexo'] = $inputs['sexo']:null;
        isset($inputs['descricao'])?$prof['descricao'] = $inputs['descricao']:$prof['descricao'] = null;
        
        $prof['ativo'] = isset($inputs['ativo'])?'1':'0';
        
        isset($inputs['fotoperfil'])?$prof['fotoperfil'] = $inputs['fotoperfil']:null;
        isset($inputs['idescola'])?$prof['idescola'] = $inputs['idescola']:null;
        isset($inputs['idparceiro'])?$prof['idparceiro'] = $inputs['idparceiro']:null;
        isset($inputs['deleted_at'])?$prof['deleted_at'] = $inputs['deleted_at']:null;
        
        return $prof;
        
    }
    
    
}
