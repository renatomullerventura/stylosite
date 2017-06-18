
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            @if($videogaleria->sexo == 'Feminino')
                <h2>Visualização da videogaleriaa <br />'{{$videogaleria->nome.' '.$videogaleria->sobrenome}}'</h2>
            @else
                <h2>Visualização do videogaleria <br />'{{$videogaleria->nome.' '.$videogaleria->sobrenome}}'</h2>
            @endif
        </div>
    </div>
    
    <div class="row fotoperfil">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
            <label for="image">
            <img src={{ asset($videogaleria->fotoperfil) }} width="100%">
            </label>
        </div>
    </div>
    
    <hr />
    
    <div class="row">
        <div class="nome col-sm-6 col-md-4">
            {{ Form::tbText('Nome', 'nome', $videogaleria->nome, $errors, [], false) }}
        </div>
        <div class="sobrenome col-sm-6 col-md-4">
            {{ Form::tbText('Sobrenome', 'sobrenome', $videogaleria->sobrenome, $errors, [], false) }}
        </div>
        <div class="apelido col-sm-6 col-md-4">
            {{ Form::tbText('Apelido', 'apelido', $videogaleria->apelido, $errors, [], false) }}
        </div>
        <div class="email col-sm-6 col-md-4">
            {{ Form::tbEmail('Email', 'email', $videogaleria->email, $errors, [], false) }}
        </div>
        <div class="data_nascimento col-sm-6 col-md-4">
            {{ Form::tbDate('Data de nascimento', 'data_nascimento', $videogaleria->data_nascimento != ""?date( "d/m/Y", strtotime($videogaleria->data_nascimento)):date('d/m/Y'), [], false )}}
        </div>
        <div class="sexo col-sm-6 col-md-4">
            {{ Form::tbDropDown('Sexo', 'sexo', ['Feminino'=>'Feminino', 'Masculino'=>'Masculino'], $videogaleria->sexo, $errors, [], false) }}
        </div>
    </div>
    <div class="row">
        <div class="descricao col-md-4">
            {{ Form::tbTextArea('Descrição', 'descricao', $videogaleria->descricao, [], false) }}
        </div>
        <div class="ativo col-sm-offset-0 col-sm-4 col-md-4">
            {{ Form::tbAtivo('Ativo', 'ativo', $videogaleria->ativo, [], false) }}
        </div>
        <div class="idescola col-sm-4 col-md-4">
            {{ Form::tbDropDown('Escola', 'idescola', $escolas, $videogaleria->idescola, $errors, [], false) }}
        </div>
        <div class="idparceiro col-sm-4 col-md-4">
            {{ Form::tbDropDown('Parceiro', 'idparceiro', $profs, $videogaleria->idparceiro, $errors, [], false) }}
        </div>
    </div>
    
</div>

@endsection