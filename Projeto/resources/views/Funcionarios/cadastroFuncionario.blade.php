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
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div> 
            @else           
            <div class="alert alert-primary">
                {{'Funcionário Cadastrado com sucesso'}}
            </div>
            @endif

        <form action="/formFuncionario/cadastro" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>
                    <strong>Nome:</strong><input class="form-control" type="text" name="nome">
                </label>
            </div>

            <div class="form-group">
                <label><strong>Cpf:</strong><input class="form-control" type="text" name="cpf">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <strong>Data:</strong><input class="form-control" type="date" name="datadeNacimento">
                </label>
            </div>
            <div class="form-group">
                <label>                       
                    <strong>Telefone:</strong> <input class="form-control" type="tel" name="telefone">
                </label>
            </div>
            <div class="form-group">
                    <label>
                        <strong>Salario:</strong> <input class="form-control" type="number" name="salario">
                    </label>
                </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>


        </form>

       

    </div>


</body>

</html>