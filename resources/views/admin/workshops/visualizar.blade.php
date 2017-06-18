
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Visualização do workshop <br />'{{$workshop->titulo}}'</h2>
        </div>
    </div>
    
    <div class="row imagem_url">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
            <label for="image">
            <img src={{ asset($workshop->imagem_url) }} width="100%">
            </label>
        </div>
    </div>
    
    <hr />
    
    <div class="row">
        <div class="titulo col-sm-6 col-md-4">
            {{ Form::tbText('Nome', 'titulo', $workshop->titulo, $errors, [], false) }}
        </div>
        <div class="data col-sm-6 col-md-4">
            {{ Form::tbDate('Data', 'data', $workshop->data != ""?date( "d/m/Y", strtotime($workshop->data)):date('d/m/Y'), [], false )}}
        </div>
    </div>
    <div class="row">
        <div class="descricao col-md-4">
            {{ Form::tbTextArea('Descrição', 'descricao', $workshop->descricao, ['class'=>'summernote'], false) }}
        </div>
    </div>
    
</div>

@endsection