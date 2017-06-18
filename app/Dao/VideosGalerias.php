<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class VideosGalerias extends Model
{
    //
    public $primaryKey =   'idvideos_galerias';
    
    protected $fillable = [
        'titulo',
        'descricao',
        'youtube_url',
        'idgaleria',
    ];
    
    public $rules = [
        'titulo'=>'required', 
        'youtube_url'=>'required',
        'idgaleria'=>'required'
    ];
    
    public function galeria(){
        
        return $this->belongsTo(Galerias::class, 'idgaleria', 'idgalerias');
        
    }
    
    public function PreencherVideosGaleria($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idvideos_galerias'])){
            $videos_galerias = $this->find($inputs['idvideos_galerias']);
        }else{
            $videos_galerias = $this;
        }
        
        isset($inputs['idgaleria'])?$videos_galerias['idgaleria'] = $inputs['idgaleria']:null;
        isset($inputs['titulo'])?$videos_galerias['titulo'] = $inputs['titulo']:null;
        isset($inputs['descricao'])?$videos_galerias['descricao'] = $inputs['descricao']:null;
        
        isset($inputs['youtube_url'])?$videos_galerias['youtube_url'] = str_replace('https://www.youtube.com/watch?v=', '', $inputs['youtube_url']):null;
        
        return $videos_galerias;
        
    }
    
}
