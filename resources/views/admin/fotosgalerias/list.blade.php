@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de Fotos da Galeria</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="{{ route('admin.fotosgalerias.incluir', ['id'=>$galeria->idgalerias])}}" class="btn btn-success">Incluir Fotos da Galeria</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($fotosgalerias as $fotogaleria)
                
                <li class="list-group-item">
                    <img src={{ asset($fotogaleria->imagem_url) }} style="width: 150px" />
                    <div class="pull-right">
                        {!! link_to_action('Admin\FotosGaleriasController@Alterar', 'Alterar', $parameters = array('id'=>$fotogaleria->idfotos_galerias), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{ route('admin.fotosgalerias.excluir', ['id'=>$fotogaleria->idfotos_galerias])}}', '{{$fotogaleria->titulo}}')" >
                            Excluir
                        </a>
                    </div>
                </li>
            
            @empty
                <p>Sem Fotos da Galeria cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection