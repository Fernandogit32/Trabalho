<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    
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
                     @if($funcionario->id_caminhao===null)
                           {{'Funcinnario sem caminhao'}}
                          @else
                         {{$funcionario->caminhao->placa}}
                      @endif

                  </td>
                  
            @endforeach        


</body>

</html>