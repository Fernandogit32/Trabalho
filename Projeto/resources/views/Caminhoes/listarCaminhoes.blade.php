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
                    
          
                           
                         

</body>

</html>