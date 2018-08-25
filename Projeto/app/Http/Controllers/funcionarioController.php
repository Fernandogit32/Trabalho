<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\formFuncionarioRequest;
class funcionarioController extends Controller
{
    function forCadasFunc(){
        return view('cadastroFuncionario');
    }

    function CadasFunc(formFuncionarioRequest $request){
        $params = $request->all();
        Funcionario::create($params);
        return redirect()->action("funcionarioController@forCadasFunc");       
    }
}
