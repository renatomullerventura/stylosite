<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;


class Banners extends Model
{
    protected $fillable =   [
        'idbanners', 
        'imagem'
    ];
    
    public $rules = [
        'imagem' => 'image|dimensions:min_width=1200,'
    ];
    
    protected $primaryKey = 'idbanners';
    
    public function PreencherBanners($inputs){
    
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idbanners'])){
            $banner = $this->find($inputs['idbanners']);
        }else{
            $banner = $this;
        }
        
        isset($inputs['imagem'])?$banner['imagem'] = $inputs['imagem']:null;
        
        return $banner;
        
    }
        
}
