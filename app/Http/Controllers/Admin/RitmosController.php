<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Ritmos;

use Illuminate\Support\Facades\Input;

class RitmosController extends Controller
{
    //
    private $ritmosModel;
    public function __construct(Ritmos $ritmos) {
        $this->ritmosModel = $ritmos;
    }
    
    public function index(){
        
        $ritmos = $this->ritmosModel->all();
        
        return view('admin/ritmos/list', compact('ritmos'));
        
    }
    
    public function Incluir(){
        
        return view('admin/ritmos/inserir');
        
    }
    
    public function Alterar($id){
        
        $ritmo = $this->ritmosModel->find($id);
        return view('admin/ritmos/alterar', compact('ritmo'));
        
    }
    
    public function Visualizar($id){
        
        $ritmo = $this->ritmosModel->find($id);
        
        return view('admin/ritmos/visualizar', compact('ritmo'));
        
    }
    
    public function Salvar(Request $request){
        
        $ritmo  =   $this->ritmosModel;
        
        $ritmo  =   $this->ritmosModel->PreencherRitmo(Input::all());
        
        $rules =   $this->ritmosModel->rules;
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
        }
            
        $ritmo->save();
    
        return redirect()->action('Admin\RitmosController@Index');
        
    }
    
    public function Excluir($id){
        
        $this->ritmosModel->destroy($id);
        
        return redirect()->action('Admin\RitmosController@Index');
        
    }
     
    
}
