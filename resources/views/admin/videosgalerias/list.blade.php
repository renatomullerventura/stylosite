@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de videos de galerias</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="{{ route('admin.videosgalerias.incluir', ['id'=>$galeria->idgalerias])}}" class="btn btn-success">Incluir videos de galerias</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($videosgalerias as $videogaleria)
                <li class="list-group-item" style="height: 120px;">
                    
                    <img style="float: left;" src="http://i1.ytimg.com/vi/{{$videogaleria->youtube_url}}/0.jpg" width="100">
                    
                    <span style="float: left; word-wrap: break-word; display: block; width: 200px; margin-left: 15px;">
                        {{ $videogaleria->titulo }}
                    </span>
                    
                    <div class="pull-right">
                        {!! link_to_action('Admin\VideosGaleriasController@Alterar', 'Alterar', $parameters = array('id'=>$videogaleria->idvideos_galerias), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{ route('admin.videosgalerias.excluir', ['id'=>$videogaleria->idvideos_galerias])}}', 'videosgalerias', '{{$videogaleria->nome}}')" >
                            Excluir
                        </a>
                    </div>
                    
                </li>
            @empty
                <p>Sem videos de galerias cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection