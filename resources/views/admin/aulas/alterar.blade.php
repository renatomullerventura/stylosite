
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Alteração da aula <strong>#{{$aula->idaulas}}</strong></h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/aulas/salvar', 'files'=>true)) !!}
    
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
        {{ Form::hidden('idaulas', $aula->idaulas) }}
        
        <div class="row">
            <div class="col-xs-4">
                {{ Form::tbDropDown('Curso', 'idcurso', $cursos, $aula->idcurso, $errors, []) }}
            </div>
            <div class="col-xs-4">
                {{ Form::tbDropDown('Dia', 'dia_semana', $dias, $aula->dia_semana, $errors, []) }}
            </div>
            <div class="col-xs-4">
                {{ Form::tbDropDown('Sala', 'sala', ['1'=>'Sala 1', '2'=>'Sala 2'], $aula->sala, $errors, []) }}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                {{ Form::tbText('Horário de início', 'horario_inicial_previsao', $aula->horario_inicial_previsao, $errors) }}
            </div>
            <div class="col-xs-6 col-sm-2">
                {{ Form::tbText('Horário de término', 'horario_final_previsao', $aula->horario_final_previsao, $errors) }}
            </div>
            <div class="col-xs-6 col-sm-4">
                {{ Form::tbDropDown('Professor', 'idprofessor', $professores, $aula->idprofessor, $errors, []) }}
            </div>
            <div class="col-xs-6 col-sm-4">
                {{ Form::tbDropDown('Professora', 'idprofessora', $professoras, $aula->idprofessora, $errors, []) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Alterar', ['class'=>'btn btn-warning']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection