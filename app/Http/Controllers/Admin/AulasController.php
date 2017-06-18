<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Aulas;
use App\Dao\Professores;
use App\Dao\Cursos;
use Illuminate\Support\Facades\Input;

class AulasController extends Controller
{
    //
    private $aulasModel;
    private $professoresModel;
    private $cursosModel;
    public function __construct(Aulas $aulas, Professores $professores, Cursos $cursos) {
        
        $this->aulasModel       =   $aulas;
        $this->professoresModel =   $professores;
        $this->cursosModel      =   $cursos;
        
    }
    
    public function index(){
        
        $grade = $this->aulasModel->CarregaGradeAulas();
        
        return view('admin/aulas/list', compact('grade'));
        
    }
    
    public function Incluir(){
        
        $cursos =   $this->cursosModel->ObterCursosArray();
        
        $professoras = $this->professoresModel->ObterProfessoresArray('Feminino');
        $professores = $this->professoresModel->ObterProfessoresArray('Masculino');
        
        $dias   =   [
            '0'=>'Domingo',
            '1'=>'Segunda Feira',
            '2'=>'Terça Feira',
            '3'=>'Quarta Feira',
            '4'=>'Quinta Feira',
            '5'=>'Sexta Feira',
            '6'=>'Sábado'
        ];
        
        return view('admin/aulas/inserir', compact('aula', 'profs', 'cursos', 'dias', 'professores', 'professoras'));
        
    }
    
    public function Alterar($id){
        
        $aula   =   $this->aulasModel->find($id);
        $cursos =   $this->cursosModel->ObterCursosArray();
        
        $professoras = $this->professoresModel->ObterProfessoresArray('Feminino');
        $professores = $this->professoresModel->ObterProfessoresArray('Masculino');
        
        $dias   =   [
            '0'=>'Domingo',
            '1'=>'Segunda Feira',
            '2'=>'Terça Feira',
            '3'=>'Quarta Feira',
            '4'=>'Quinta Feira',
            '5'=>'Sexta Feira',
            '6'=>'Sábado'
        ];
        
        return view('admin/aulas/alterar', compact('aula', 'profs', 'cursos', 'dias', 'professores', 'professoras'));
        
    }
    
    public function Salvar(Request $request){
        
        $aula   =   $this->aulasModel;
        
        $aula   =   $this->aulasModel->PreencherAula(Input::all());
        
        $rules  =   $this->aulasModel->rules;
        $messages = array(
            'required' => 'O campo ":attribute" é obrigatório.',
            'date_format'=>'O campo de horário de aulas ":attribute" não está no formato correto (hora:minuto:segundo).'
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
                    
                    $destinationPath = public_path('imagens/aulas');
                    $extension = $request->file('fotoperfil')->getClientOriginalExtension(); // getting image extension
                    $fileName = date('dmY').'_'.md5(time()).'.'.$extension; // renameing image
                    
                    $img = Image::make($request->file('fotoperfil'));
                    $img->fit(600, null, function ($constraint) {
                        $constraint->upsize();
                    });
                    
                    $img->save($destinationPath.'/'.$fileName, 60);
                    
                    $aula->fotoperfil  =   'imagens/aulas/'.$fileName;
                    
                }
                
            }
            
            $aula->save();
        
            return redirect()->action('Admin\AulasController@Index');
        }
        
    }

    public function Excluir($id){
        
        $this->aulasModel->destroy($id);
        
        return redirect()->action('Admin\AulasController@Index');
        
    }
}
