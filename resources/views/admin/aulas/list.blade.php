@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <div class="col-sm-12 text-center">
            <h2>Listagem de aulas</h2>
        </div>
    
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <a href="aulas/incluir" class="btn btn-success">Incluir aulas</a>
            <br /><br />
        </div>
        
        <div class="col-sm-6 col-sm-offset-3">
            
            <div class="row center">
            
                @foreach($grade as $dias)
                
                    <h3 class="text-warning" id={{ str_replace(" ", "", $dias[0]) }}>{{ $dias[0] }}</h3>
                    
                    <br /><br />
                    
                    <div class="col m12 s12">
                      <table class="table table-striped">
                    
                      <thead>
                        <tr>
                            <th data-field="idaula">#</th>
                            <th data-field="ritmo">Ritmo </th>
                            <th data-field="nivel">Nível </th>
                            <th data-field="horarioinicio">Horário de início </th>
                            <th data-field="horariotermino">Horário de término </th>
                            <th data-field="professores">Professores </th>
                            <th data-field="botoes"></th>  
                        </tr>
                      </thead>
                      <tbody>
                    			
                        @foreach($dias[1] as $aulas)
                    			
                            <tr>
                                <td>{{ $aulas->idaulas }}</td>	
                                <td>{{ $aulas->nome }}</td>	
                                <td>{{ $aulas->dificuldade }}	</td>
                                <td>{{ date('H:i', strtotime($aulas->horario_inicial_previsao)) }}</td>
                                <td>{{ date('H:i', strtotime($aulas->horario_final_previsao)) }}</td>
                                <td>{!! $aulas->professores !!}</td>
                                <td>
                                    {!! link_to_action('Admin\AulasController@Alterar', 'Alterar', $parameters = array('id'=>$aulas->idaulas), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                                    <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{route('admin.aulas.excluir', ['id'=>$aulas->idaulas])}}', '{{$aulas->nome.' ('.$aulas->dificuldade.')'}}')" >
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        
                        @endforeach
                        
                      </tbody>
                      
                    </table>
                    </div>
                
                @endforeach
          
              <br /><br />
              
            </div>
        
    </div>
    </div>
@endsection