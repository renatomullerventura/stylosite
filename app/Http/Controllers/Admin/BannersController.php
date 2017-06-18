<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dao\Banners;
use Intervention\Image\ImageManager;
use Image;

use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class BannersController extends Controller
{
    //
    
    private $bannersModel;
    public function __construct(Banners $banners) {
        
        $this->bannersModel = $banners;
    }
    
    public function index(){
        
        $banners = $this->bannersModel->all();
        
        return view('admin/banners/list', compact('banners'));
        
    }
    
    public function Visualizar($id){
        
        $banner = $this->bannersModel->find($id);
        
        return view('admin/banners/visualizar', compact('banner'));
        
    }
    
    public function Salvar(Request $request){
        
        $banner  =   $this->bannersModel;
        
        $banner  =   $this->bannersModel->PreencherBanners(Input::all());
        
        $rules =   $this->bannersModel->rules;
        $messages = array(
            'required' => 'O campo ":attribute" é obrigatório.',
            'dimensions'=>'As dimensões estão fora do esperado (1000x500).',
            'image'=>'Os formatos de arquivo aceitos são; jpeg, jpg, png, gif, svg'
        );
        
        $validator = \Validator::make(Input::all(), $rules, $messages);

        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            
            // redirect our user back to the form with the errors from the validator
            return back()->withErrors($validator);
        }else{
            
            if ($request->hasFile('imagem')) {
                //
                if ($request->file('imagem')->isValid()) {
                    
                    $destinationPath = public_path('imagens/banners');
                    $extension = $request->file('imagem')->getClientOriginalExtension();
                    $fileName = date('dmY').'_'.md5(time()).'.'.$extension;
                    
                    $img = Image::make($request->file('imagem'));
                    $img->fit(round($img->width()), round($img->width() * 0.5652), function ($constraint) {
                        $constraint->upsize();
                    });
                    
                    $img->save($destinationPath.'/'.$fileName, 60);
                    
                    $banner->imagem  =   'imagens/banners/'.$fileName;
                    
                }
                
            }
            
            $banner->save();
        
            return redirect()->action('Admin\BannersController@Index');
        }
        
    }

    public function Alterar($id){
        
        $banner = $this->bannersModel->find($id);
        
        return view('admin/banners/alterar', compact('banner'));
        
    }
    
}
