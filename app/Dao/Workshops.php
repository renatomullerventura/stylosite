<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class Workshops extends Model
{
    //
    protected $fillable =[
        'idworkshops', 
        'titulo', 
        'descricao', 
        'data', 
        'imagem_url'
    ];
    
    public $rules = [
        'titulo'=>'string|max:256', 
        'descricao'=>'required'
        
    ];
    
    protected $primaryKey = 'idworkshops';
    
    public function PreencherWorkshop($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idworkshops'])){
            $work = $this->find($inputs['idworkshops']);
        }else{
            $work = $this;
        }
        
        isset($inputs['titulo'])?$work['titulo'] = $inputs['titulo']:null;
        if(isset($inputs['data'])){
            $work['data'] = date('Y-m-d 00:00:00', mktime(0, 0, 0, explode('/', $inputs['data'])[1], explode('/', $inputs['data'])[0], explode('/', $inputs['data'])[2]));
        }else{
            $work['data'] = null;
        }
        isset($inputs['descricao'])?$work['descricao'] = $inputs['descricao']:$work['descricao'] = null;
        isset($inputs['deleted_at'])?$work['deleted_at'] = $inputs['deleted_at']:null;
        isset($inputs['created_at'])?$work['created_at'] = $inputs['created_at']:null;
        isset($inputs['updated_at'])?$work['updated_at'] = $inputs['updated_at']:null;
        
        return $work;
        
    }
    
}
