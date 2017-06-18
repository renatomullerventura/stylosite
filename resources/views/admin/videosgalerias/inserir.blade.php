
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Inserção de Videos de Galeria</h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/videosgalerias/salvar', 'files'=>true)) !!}
        
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
        
        {{ Form::hidden('idgaleria', $galeria->idgalerias) }}
        
        <div class="row">
            <div class="nome col-sm-6 col-md-4">
                {{ Form::tbText('Título', 'titulo', '', $errors) }}
            </div>
        </div>
        
        <div class="row">
            <div class="nome col-sm-6 col-md-4">
                {{ Form::tbText('Url do Youtube', 'youtube_url', '', $errors) }}
            </div>
        </div>
        
        <div class="row">
            <div class="descricao col-md-6">
                {{ Form::tbTextArea('Descrição', 'descricao', '', ['class'=>'summernote']) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Inserir', ['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection