@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de galerias</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="galerias/incluir" class="btn btn-success">Incluir galerias</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($galerias as $galeria)
                <li class="list-group-item">
                    <span class="glyphicon glyphicon-thumbs-{{ ($galeria->ativo?'up':'down') }}"
                    data-toggle="tooltip" data-placement="top" title="Galeria {{ ($galeria->ativo?'ativa':'inativa') }}" ></span>
                    <strong>{{ $galeria->titulo }} </strong>
                    {{ date('d/m/Y',strtotime($galeria->data)) }}
                    <div class="pull-right">
                        {!! link_to_action('Admin\GaleriasController@Visualizar', 'Visualizar', $parameters = array('id'=>$galeria->idgalerias), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        {!! link_to_action('Admin\GaleriasController@Alterar', 'Alterar', $parameters = array('id'=>$galeria->idgalerias), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        
                        <a href="{{action('Admin\FotosGaleriasController@Index', ['id' => $galeria->idgalerias])}}" class="btn btn-default btn-xs" >
                            <i class="glyphicon glyphicon-link"></i>
                            Fotos
                        </a>
                        
                        <a href="{{action('Admin\VideosGaleriasController@Index', ['id' => $galeria->idgalerias])}}" class="btn btn-default btn-xs" >
                            <i class="glyphicon glyphicon-link"></i>
                            Vídeos
                        </a>
                    </div>
                </li>
            
            @empty
                <p>Sem galerias cadastradas...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection