<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dao\Ritmos;
use App\Dao\Professores;
use App\Dao\Aulas;
use App\Dao\Banners;
use App\Dao\Workshops;
use App\Dao\Galerias;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    
    private $ritmosModel;
    private $professoresModel;
    private $aulasModel;
    private $bannersModel;
    private $workshopsModel;
    private $galeriasModel;
    public function __construct(Galerias $galerias, Workshops $workshops, Banners $banners, Aulas $aulas, Ritmos $ritmos, Professores $professores) {
        
        $this->ritmosModel = $ritmos;
        $this->professoresModel = $professores;
        $this->aulasModel = $aulas;
        $this->bannersModel = $banners;
        $this->workshopsModel = $workshops;
        $this->galeriasModel = $galerias;
        
    }
    
    public function index()
    {
        
        $ritmos = $this->ritmosModel->all();
        
        $professores = $this->professoresModel->all();
        $banners = $this->bannersModel->all();
        $grade = $this->aulasModel->CarregaGradeAulas();
        $workshops = $this->workshopsModel->where('data', '<', date("Y-m-d H:i:s", mktime(0, 0, 0, date("m")+1, 1, date("Y"))))->get();
        $galerias = $this->galeriasModel->All();
        
        return view('inicio.default', compact('ritmos', 'professores', 'grade', 'banners', 'workshops', 'galerias'));
        
    }
    
    public function album($id)
    {
        
        $galeria =    $this->galeriasModel->find($id);
        
        $imagensGalerias    =   $galeria->fotos;
        
        return view('inicio.album', compact('imagensGalerias', 'galeria'));
        
    }
    
    public function bolsistas()
    {
        echo 'Grade de bolsistas';
    }
    
}
