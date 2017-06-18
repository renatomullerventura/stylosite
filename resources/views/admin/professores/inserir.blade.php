
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Inserção de professor</h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/professores/salvar', 'files'=>true)) !!}
    
        <div class="row fotoperfil">
            <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                <label for="image">
                <img src='/public/imagens/dancarinos.png' width="100%">
                {{ Form::file('fotoperfil', ['class'=>'hidden', 'id'=>'image']) }}
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
        <div class="row">
            <div class="nome col-sm-6 col-md-4">
                {{ Form::tbText('Nome', 'nome', '', $errors) }}
            </div>
            <div class="sobrenome col-sm-6 col-md-4">
                {{ Form::tbText('Sobrenome', 'sobrenome', '', $errors) }}
            </div>
            <div class="apelido col-sm-6 col-md-4">
                {{ Form::tbText('Apelido', 'apelido', '', $errors) }}
            </div>
            <div class="email col-sm-6 col-md-4">
                {{ Form::tbEmail('Email', 'email', '', $errors) }}
            </div>
            <div class="data_nascimento col-sm-6 col-md-4">
                {{ Form::tbDate('Data de nascimento', 'data_nascimento', date('d/m/Y')) }}
            </div>
            <div class="sexo col-sm-6 col-md-4">
                {{ Form::tbDropDown('Sexo', 'sexo', ['Feminino'=>'Feminino', 'Masculino'=>'Masculino'], '', $errors, []) }}
            </div>
        </div>
        <div class="row">
            <div class="descricao col-md-6">
                {{ Form::tbTextArea('Descrição', 'descricao', '', ['class'=>'summernote']) }}
            </div>
            <div class="ativo col-sm-offset-0 col-sm-4 col-md-2">
                {{ Form::tbAtivo('Ativo', 'ativo', 1, []) }}
            </div>
            <div class="idescola col-sm-4 col-md-2">
                {{ Form::tbDropDown('Escola', 'idescola', $escolas, '', $errors) }}
            </div>
            <div class="idparceiro col-sm-4 col-md-2">
                {{ Form::tbDropDown('Parceiro', 'idparceiro', $profs, '', $errors) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Inserir', ['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection