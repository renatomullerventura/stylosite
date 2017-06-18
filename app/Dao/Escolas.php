<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    
    protected $fillable =   [
      'idescolas',
      'nome',
      'created_at'
    ];
    
    public function ObterEscolasArray(){
        
        $escolas  =   array();
        
        foreach ($this->all() as $value) {
            $escolas[$value->idescolas] = $value->nome;
        }
        
        return $escolas;
        
    }
    
}
