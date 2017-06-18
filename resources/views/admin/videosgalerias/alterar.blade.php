
@extends('layouts.admin')

@section('content')

<div class="container">
    
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Alteração do video de galeria <br />'{{$videogaleria->titulo}}'</h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/videosgalerias/salvar', 'files'=>true)) !!}
    
        <div class="row fotoperfil">
            <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                <label for="image">
                    <a href="https://www.youtube.com/watch?v={{$videogaleria->youtube_url}}" target="_blank">
                        <img src="http://i1.ytimg.com/vi/{{$videogaleria->youtube_url}}/0.jpg" width="100%" />
                    </a>
                </label>
            </div>
        </div>
        
        <hr />
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        {{ Form::hidden('idvideos_galerias', $videogaleria->idvideos_galerias) }}
        {{ Form::hidden('idgaleria', $videogaleria->idgaleria) }}
        
        <div class="row">
            <div class="titulo col-sm-12 col-md-12">
                {{ Form::tbText('Título', 'titulo', $videogaleria->titulo, $errors) }}
            </div>
        </div>
        
        <div class="row">
            <div class="youtube_url col-sm-12 col-md-12">
                {{ Form::tbText('Url do Youtube', 'youtube_url', 'https://www.youtube.com/watch?v='.$videogaleria->youtube_url, $errors) }}
            </div>
        </div>
        
        <div class="row">
            <div class="descricao col-md-6">
                {{ Form::tbTextArea('Descrição', 'descricao', $videogaleria->descricao, ['class'=>'summernote']) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Alterar', ['class'=>'btn btn-warning']) }}
        </div>
        
    {!! Form::close() !!}
    
</div>

@endsection