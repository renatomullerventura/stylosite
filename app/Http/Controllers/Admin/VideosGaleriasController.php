<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Galerias;
use App\Dao\VideosGalerias;
use Intervention\Image\Size;
use Image;

use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class VideosGaleriasController extends Controller
{
    
    private $videosgaleriasModel;
    private $galeriasModel;
    public function __construct(VideosGalerias $videosgalerias, Galerias $galerias) {
        
        $this->videosgaleriasModel = $videosgalerias;
        $this->galeriasModel =   $galerias;
    }
    
    public function index($id){
        
        $galeria = $this->galeriasModel->find($id);
        
        $videosgalerias = $galeria->videos;
        
        return view('admin/videosgalerias/list', compact('galeria', 'videosgalerias'));
        
    }
    
    public function Incluir($id){
        
        $galeria    =   $this->videosgaleriasModel->find($id)->galeria;
        
        return view('admin/videosgalerias/inserir', compact('galeria', 'id'));
        
    }
    
    public function Alterar($idfotos_galerias){
        
        $videogaleria    =   $this->videosgaleriasModel->where('idvideos_galerias', $idfotos_galerias)->get()[0];
        $galeria        =   $videogaleria->galeria;
        
        return view('admin/videosgalerias/alterar', compact('galeria', 'videogaleria'));
        
    }
    
    public function Salvar(Request $request){
        
        $videogaleria  =   $this->videosgaleriasModel;
        
        $videogaleria  =   $this->videosgaleriasModel->PreencherVideosGaleria(Input::all());
        
        $rules =   $this->videosgaleriasModel->rules;
        $messages = array(
            'required' => 'O campo ":attribute" é obrigatório.'
        );
        
        $validator = \Validator::make(Input::all(), $rules, $messages);
        
        if ($validator->fails()) {
            
            // get the error messages from the validator
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return back()->withErrors($validator);
            
        }else{
            $id =   $videogaleria->idgaleria;
            $videogaleria->save();
            return redirect()->action('Admin\VideosGaleriasController@Index', ['id'=>$id]);
        }
        
    }

    public function Excluir($id){
        
        $videosgalerias    =   $this->videosgaleriasModel->find($id);
        
        $this->videosgaleriasModel->destroy($id);
        
        return redirect()->action('Admin\VideosGaleriasController@Index', [$videosgalerias->idgaleria]);
        
    }
    
}
