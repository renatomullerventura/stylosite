<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Professores;
use App\Dao\Escolas;
use Intervention\Image\Size;
use Image;

use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProfessoresController extends Controller
{
    
    private $professoresModel;
    public function __construct(Professores $professores, Escolas $escolas) {
        
        $this->professoresModel = $professores;
        $this->escolasModel =   $escolas;
    }
    
    public function index(){
        
        $professores = $this->professoresModel->all();
        
        return view('admin/professores/list', compact('professores'));
        
    }
    
    public function Incluir(){
        
        $profs  =   $this->professoresModel->ObterProfessoresArray();
        $escolas=  $this->escolasModel->ObterEscolasArray();
        
        
        return view('admin/professores/inserir', compact('professor', 'profs', 'escolas'));
        
    }
    
    public function Visualizar($id){
        
        $professor = $this->professoresModel->find($id);
        $profs  =   $this->professoresModel->ObterProfessoresArray();
        $escolas=  $this->escolasModel->ObterEscolasArray();
        
        return view('admin/professores/visualizar', compact('professor', 'profs', 'escolas'));
        
    }
    
    public function Alterar($id){
        
        $professor = $this->professoresModel->find($id);
        $profs  =   $this->professoresModel->ObterProfessoresArray();
        $escolas=  $this->escolasModel->ObterEscolasArray();
        
        
        return view('admin/professores/alterar', compact('professor', 'profs', 'escolas'));
        
    }
    
    public function Salvar(Request $request){
        
        $professor  =   $this->professoresModel;
        
        $professor  =   $this->professoresModel->PreencherProfessor(Input::all());
        
        $rules =   $this->professoresModel->rules;
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
            
            if ($request->hasFile('fotoperfil')) {
                //
                if ($request->file('fotoperfil')->isValid()) {
                    
                    $destinationPath = public_path('imagens/professores');
                    $extension = $request->file('fotoperfil')->getClientOriginalExtension(); // getting image extension
                    $fileName = date('dmY').'_'.md5(time()).'.'.$extension; // renameing image
                    
                    $img = Image::make($request->file('fotoperfil'));
                    $img->fit(round($img->height() * 0.5652), round($img->height()), function ($constraint) {
                        $constraint->upsize();
                    });
                    
                    $img->save($destinationPath.'/'.$fileName, 60);
                    
                    $professor->fotoperfil  =   'imagens/professores/'.$fileName;
                    
                }
                
            }
            
            $professor->save();
        
            return redirect()->action('Admin\ProfessoresController@Index');
        }
        
    }

    public function Excluir($id){
        
        $this->professoresModel->destroy($id);
        
        return redirect()->action('Admin\ProfessoresController@Index');
        
    }
    
}
