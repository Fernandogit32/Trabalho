@extends('template.template')


@section('conteudo') 
    
        <div class="container">
                <table class="table table-dark">
              <thead>            
                <tr>               
                         
                           
                  <th scope="col">placa</th>
                  <th scope="col">modelo</th>
                  <th scope="col">marca</th>
                  <th scope="col">cor</th>
                  <th scope="col">ano</th>
                  <th scope="col">renavan </th>
                  <th scope="col">funcionario </th>
                </tr>
              </thead>
                               
            
            @foreach($caminhoes as $caminhao) 
            
                <tr>      
                        
                  <td>{{$caminhao->placa}}</td>
                  <td>{{$caminhao->modelo}}</td>
                  <td>{{$caminhao->marca}}</td>
                  <td>{{$caminhao->cor}}</td>   
                  <td>{{$caminhao->ano}}</td>   
                  <td>{{$caminhao->renavan}}</td>
                <td>@if($caminhao->funcionario===null)
                  {{'nenhum funcionario'}}
                  @else
                  {{$caminhao->funcionario->nome}}
                  @endif
                </td>

                                    
                                  
                  </tr>
                  
            @endforeach  
                    
             
    @endsection
                           
                         

