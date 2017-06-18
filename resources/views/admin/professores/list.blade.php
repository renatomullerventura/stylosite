@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de professores</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="professores/incluir" class="btn btn-success">Incluir professores</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($professores as $professor)
                <li class="list-group-item">
                    <img src={{ asset($professor->fotoperfil) }} width="50">
                    {{ $professor->nome.' '.$professor->sobrenome }} 
                    {{ $professor->apelido != null? '('.$professor->apelido.')':'' }}
                    <div class="pull-right">
                        {!! link_to_action('Admin\ProfessoresController@Visualizar', 'Visualizar', $parameters = array('id'=>$professor->idprofessores), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        {!! link_to_action('Admin\ProfessoresController@Alterar', 'Alterar', $parameters = array('id'=>$professor->idprofessores), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{route('admin.professores.excluir', ['id'=>$professor->idprofessores])}}', '{{$professor->nome}}')" >
                            Excluir
                        </a>
                    </div>
                </li>
            
            @empty
                <p>Sem professores cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection