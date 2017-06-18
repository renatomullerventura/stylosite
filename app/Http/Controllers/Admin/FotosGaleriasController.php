<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Galerias;
use App\Dao\FotosGalerias;
use Intervention\Image\Size;
use Image;

use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FotosGaleriasController extends Controller
{
    
    private $fotosgaleriasModel;
    private $galeriasModel;
    public function __construct(FotosGalerias $fotosgalerias, Galerias $galerias) {
        
        $this->fotosgaleriasModel =   $fotosgalerias;
        $this->galeriasModel    =   $galerias;
    }
    
    public function index($id){
        
        $galeria = $this->galeriasModel->find($id);
        
        $fotosgalerias = $galeria->fotos;
        
        return view('admin/fotosgalerias/list', compact('galeria', 'fotosgalerias'));
        
    }
    
    public function Incluir($id){
        
        $galeria    =   $this->fotosgaleriasModel->find($id)->galeria;
        
        return view('admin/fotosgalerias/inserir', compact('galeria', 'id'));
        
    }
    
    public function Visualizar($id){
        
        $fotogaleria = $this->fotosgaleriasModel->find($id);
        $fotogaleria  =   $this->fotosgaleriasModel->ObterFotosGaleriasArray();
        $escolas=  $this->escolasModel->ObterEscolasArray();
        
        return view('admin/fotosgalerias/visualizar', compact('fotogaleria', 'fotogaleria', 'escolas'));
        
    }
    
    public function Alterar($idfotos_galerias){
        
        $fotogaleria    =   $this->fotosgaleriasModel->where('idfotos_galerias', $idfotos_galerias)->get()[0];
        $galeria        =   $fotogaleria->galeria;
        
        return view('admin/fotosgalerias/alterar', compact('galeria', 'fotogaleria'));
        
    }
    
    public function Salvar(Request $request){
        
        $fotogaleria  =   $this->fotosgaleriasModel;
        
        $fotogaleria  =   $this->fotosgaleriasModel->PreencherFotosGaleria(Input::all());
        
        $rules =   $this->fotosgaleriasModel->rules;
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
                    
                    $destinationPath = public_path('imagens/midias');
                    $extension = $request->file('imagem_url')->getClientOriginalExtension(); // getting image extension
                    $fileName = $fotogaleria->idgaleria.'_'.date('dmY').'_'.md5(time()).'.'.$extension; // renameing image
                    
                    $img = Image::make($request->file('imagem_url'));
                    $img->fit(round($img->width()), round($img->width() * 0.5652), function ($constraint) {
                        $constraint->upsize();
                    });
                    
                    $img->save($destinationPath.'/'.$fileName, 60);
                    
                    $fotogaleria->imagem_url  =   'imagens/midias/'.$fileName;
                    
                }
                
            }
            
            $id =   $fotogaleria->idgaleria;
            
            $fotogaleria->save();
        
            return redirect()->action('Admin\FotosGaleriasController@Index', ['id'=>$id]);
        }
        
    }

    public function Excluir($id){
        
        $fotosgalerias    =   $this->fotosgaleriasModel->find($id);
        
        $this->fotosgaleriasModel->destroy($id);
        
        return redirect()->action('Admin\FotosGaleriasController@Index', [$fotosgalerias->idgaleria]);
        
    }
    
}
