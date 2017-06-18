<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class FotosGalerias extends Model
{
    //
    public $primaryKey =   'idfotos_galerias';
    
    protected $fillable = [
        'titulo',
        'imagem_url',
        'idgaleria',
    ];
    
    public $rules = [
        'titulo'=>'required', 
        'imagem_url'=>'image',
        'idgaleria'=>'required'
    ];
    
    public function galeria(){
        
        return $this->belongsTo(Galerias::class, 'idgaleria', 'idgalerias');
        
    }
    
    public function PreencherFotosGaleria($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idfotos_galerias'])){
            $fotos_galerias = $this->find($inputs['idfotos_galerias']);
        }else{
            $fotos_galerias = $this;
        }
        
        $fotos_galerias['idgaleria'] = $inputs['idgaleria'];
        isset($inputs['titulo'])?$fotos_galerias['titulo'] = $inputs['titulo']:null;
        isset($inputs['imagem_url'])?$fotos_galerias['imagem_url'] = $inputs['imagem_url']:null;
        
        return $fotos_galerias;
        
    }
    
}
