
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Visualização da galeria <br />'{{$galeria->titulo.' '.date('d/m/Y', strtotime($galeria->data))}}'</h2>
        </div>
    </div>
    
    <hr />
    
    <div class="row">
        <div class="col-sm-4 col-md-6">
            {{ Form::tbText('Título', 'titulo', $galeria->titulo, $errors, [], false) }}
        </div>
        <div class="col-sm-4 col-md-3">
            {{ Form::tbDate('Data', 'data', date('d/m/Y', strtotime($galeria->data)), [], false) }}
        </div>
        <div class="col-sm-4 col-md-3">
            {{ Form::tbAtivo('Ativo', 'ativo', $galeria->ativo, [], false) }}
        </div>
        <div class="col-sm-12 col-md-12">
            {{ Form::tbTextArea('Descrição', 'descricao', $galeria->descricao, ['class'=>'summernote'], false) }}
        </div>
    </div>
    
    <hr />
    
    <div class="row flexcontainer">
        <h2 style="text-align: center;">Fotos</h2>
        @forelse($fotos as $foto)
            <img src="{{asset($foto->imagem_url)}}" alt="{{$foto->titulo}}" class="img-thumbnail" style=" height: 200px;">
            
        @empty
            Ainda não há fotos cadastradas.
            <a href="" class="btn btn-default btn-xs" >
                <i class="glyphicon glyphicon-link"></i>Fotos
            </a>
        @endforelse
        
    </div>
    
    <hr />
    
    <div class="row">
        <h2 style="text-align: center;">Vídeos</h2>
        @forelse($videos as $video)
            <div  style="width:853px; height:520px; margin: 0 auto;">
                <h3 style="text-align: center;">{{$video->titulo}}</h3>
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$video->youtube_url}}" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        @empty
            Ainda não há vídeos cadastradas.
            <a href="" class="btn btn-default btn-xs" >
                <i class="glyphicon glyphicon-link"></i>Vídeos
            </a>
        @endforelse
        
    </div>
    
</div>

@endsection