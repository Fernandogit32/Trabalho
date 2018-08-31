@extends('template.template')


@section('conteudo') 
    
        <div class="container">
                <table class="table table-dark">
              <thead>            
                <tr>                  
                  <th scope="col"> Nome do Funcionario</th>
                  <th scope="col"> N° do cpf</th>
                  <th scope="col">Data de Nacimento</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Salario</th>
                  <th scope="col">caminhao</th>
                </tr>
              </thead>
                               
            
            @foreach($funcionarios as $funcionario) 
            
                <tr>      
                        
                  <td>{{$funcionario->nome}}</td>
                  <td>{{$funcionario->cpf}}</td>
                  <td>{{$funcionario->datadeNacimento}}</td>
                  <td>{{$funcionario->telefone}}</td>   
                  <td>{{$funcionario->salario}}</td>   
                  <td>
                     @if($funcionario->caminhao===null)
                           {{'Funcinnario sem caminhao'}}
                          @else
                         {{$funcionario->caminhao->placa}}
                      @endif
                    
                  </td>
                  
            @endforeach        


            @endsection