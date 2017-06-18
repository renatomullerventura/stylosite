<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Workshops;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class WorkshopsController extends Controller
{
    
    private $workshopsModel;
    public function __construct(Workshops $workshops) {
        
        $this->workshopsModel = $workshops;
    }
    
    public function index(){
        
        $workshops = $this->workshopsModel->all();
        
        return view('admin/workshops/list', compact('workshops'));
        
    }
    
    public function Incluir(){
        
        return view('admin/workshops/inserir');
        
    }
    
    public function Salvar(Request $request){
        
        $workshop  =   $this->workshopsModel;
        
        $workshop  =   $this->workshopsModel->PreencherWorkshop(Input::all());
        
        $rules =   $this->workshopsModel->rules;
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
            
            if ($request->hasFile('imagem_url')) {
                //
                if ($request->file('imagem_url')->isValid()) {
                    
                    $destinationPath = public_path('imagens/workshopflyers');
                    $extension = $request->file('imagem_url')->getClientOriginalExtension(); // getting image extension
                    $fileName = date('dmY').'_'.md5(time()).'.'.$extension; // renameing image
                    
                    $request->file('imagem_url')->move($destinationPath, $fileName);
                    
                    $workshop->imagem_url  =   'imagens/workshopflyers/'.$fileName;
                    
                }
                
            }
            
            $workshop->save();
        
            return redirect()->action('Admin\WorkshopsController@Index');
        }
        
    }
    
    public function Visualizar($id){
        
        $workshop = $this->workshopsModel->find($id);
        
        return view('admin/workshops/visualizar', compact('workshop'));
        
    }
    
    public function Excluir($id){
        
        $this->workshopsModel->destroy($id);
        
        return redirect()->action('Admin\WorkshopsController@Index');
        
    }
    
    public function Alterar($id){
        
        $workshop = $this->workshopsModel->find($id);
        
        
        return view('admin/workshops/alterar', compact('workshop'));
        
    }
    
}
