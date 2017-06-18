<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class Galerias extends Model
{
    //
    
    public $primaryKey =   'idgalerias';
    protected $fillable =   [
        'idgalerias',
        'titulo',
        'descricao',
        'data',
        'ativo'
    ];
    
    public $rules = [
        'titulo'=>'required|string|max:255',
        'descricao',
        'data'=>'required',
        'ativo'=>'boolean'
    ];
    
    public function fotos(){
        
        return $this->hasMany(FotosGalerias::class, 'idgaleria', 'idgalerias');
        
    }
    
    public function videos(){
        
        return $this->hasMany(VideosGalerias::class, 'idgaleria', 'idgalerias');
        
    }
    
    public function PreencherGaleria($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idgalerias'])){
            $galeria = $this->find($inputs['idgalerias']);
        }else{
            $galeria = $this;
        }
        
        isset($inputs['titulo'])?$galeria['titulo'] = $inputs['titulo']:null;
        isset($inputs['descricao'])?$galeria['descricao'] = $inputs['descricao']:$galeria['descricao'] = null;
        
        if(isset($inputs['data'])){
            $galeria['data'] = date('Y-m-d 00:00:00', mktime(0, 0, 0, explode('/', $inputs['data'])[1], explode('/', $inputs['data'])[0], explode('/', $inputs['data'])[2]));
        }else{
            $galeria['data'] = null;
        }
        
        $galeria['ativo'] = isset($inputs['ativo'])?'1':'0';
        
        isset($inputs['deleted_at'])?$galeria['deleted_at'] = $inputs['deleted_at']:null;
        
        return $galeria;
        
    }
    
}
