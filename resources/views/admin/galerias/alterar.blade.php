
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Alteração da galeria <br />'{{$galeria->titulo}}'</h2>
    </div>
    
    <hr />
    
    {!! Form::open(array('url' => 'admin/galerias/salvar', 'files'=>true)) !!}
    
        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        {{ Form::hidden('idgalerias', $galeria->idgalerias) }}
        
        <div class="row">
            <div class="col-sm-4 col-md-6">
                {{ Form::tbText('Título', 'titulo', $galeria->titulo, $errors) }}
            </div>
            <div class="col-sm-4 col-md-3">
                {{ Form::tbDate('Data', 'data', date('d/m/Y', strtotime($galeria->data))) }}
            </div>
            <div class="col-sm-4 col-md-3">
                {{ Form::tbAtivo('Ativo', 'ativo', $galeria->ativo, []) }}
            </div>
            <div class="col-sm-12 col-md-12">
                {{ Form::tbTextArea('Descrição', 'descricao', $galeria->descricao, ['class'=>'summernote']) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Alterar', ['class'=>'btn btn-warning']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection