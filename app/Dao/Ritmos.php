<?php

namespace App\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ritmos extends Model
{
    protected $fillable =   [
        'idritmos',
        'nome', 
        'descricao',
        'created_at'
    ];
    
    use SoftDeletes;
    
    protected $primaryKey = 'idritmos';
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    public $rules = [
        'nome'=>'required', 
        'descricao'=>'required|string'
    ];
    
    public function PreencherRitmo($inputs){
        
        $inputs = array_filter($inputs);
        
        if(isset($inputs['idritmos'])){
            $ritmo = $this->find($inputs['idritmos']);
        }else{
            $ritmo = $this;
        }
        
        isset($inputs['nome'])?$ritmo['nome'] = $inputs['nome']:null;
        isset($inputs['descricao'])?$ritmo['descricao'] = $inputs['descricao']:$ritmo['descricao'] = null;
        isset($inputs['deleted_at'])?$ritmo['deleted_at'] = $inputs['deleted_at']:null;
        isset($inputs['created_at'])?$ritmo['created_at'] = $inputs['created_at']:null;
        isset($inputs['updated_at'])?$ritmo['updated_at'] = $inputs['updated_at']:null;
        
        return $ritmo;
        
    }
    
}
