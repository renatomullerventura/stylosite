<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Galerias;

use Illuminate\Support\Facades\Input;

class GaleriasController extends Controller
{
    
    private $galeriasModel;
    public function __construct(Galerias $galerias) {
        
        $this->galeriasModel = $galerias;
    }
    
    public function index(){
        
        $galerias = $this->galeriasModel->all();
        
        return view('admin/galerias/list', compact('galerias'));
        
    }
    
    public function Incluir(){
        
        $galeria    =   $this->galeriasModel->all();
        
        return view('admin/galerias/inserir', compact('galeria'));
        
    }
    
    public function Visualizar($id){
        
        $galeria = $this->galeriasModel->find($id);
        
        $fotos  =   $galeria->fotos()->get();
        
        $videos  =   $galeria->videos()->get();
        
        return view('admin/galerias/visualizar', compact('galeria', 'fotos', 'videos'));
        
    }
    
    public function Alterar($id){
        
        $galeria = $this->galeriasModel->find($id);
        
        return view('admin/galerias/alterar', compact('galeria'));
        
    }
    
    public function Salvar(Request $request){
        
        $galeria  =   $this->galeriasModel;
        
        $galeria  =   $this->galeriasModel->PreencherGaleria(Input::all());
        
        $rules =   $this->galeriasModel->rules;
        $messages = array(
            'required' => 'O campo ":attribute" é obrigatório.'
        );
        
        $validator = \Validator::make(Input::all(), $rules, $messages);

        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            
            // redirect our user back to the form with the errors from the validator
            return back()->withErrors($validator);
        }else{
            
            $galeria->save();
        
            return redirect()->action('Admin\GaleriasController@Index');
        }
        
    }

    public function Excluir($id){
        
        $this->galeriasModel->destroy($id);
        
        return redirect()->action('Admin\GaleriasController@Index');
        
    }
    
}
