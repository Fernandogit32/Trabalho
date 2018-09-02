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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/formFuncionario">Cadastrar Funcionário<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formFuncionario/listagem">Listar Funcionários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formCaminhao">Cadastrar Caminhões</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formCaminhao/listagem">Listar Caminhões</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/vincular">Vincular</a>
          </li>
        </ul>       
      </div>
    </nav>



    @yield('conteudo') 
    
   <h1> aqui vai o rodapé<h1>

  </div>

</body>

</html>