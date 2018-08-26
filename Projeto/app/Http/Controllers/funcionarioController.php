<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\formFuncionarioRequest;
use App\Caminhao;
class funcionarioController extends Controller
{
    function forCadasFunc(){
        return view('Funcionarios\cadastroFuncionario');
    }

    function CadasFunc(formFuncionarioRequest $request){
        $params = $request->all();
        Funcionario::create($params);
        return redirect()->action("funcionarioController@forCadasFunc");       
    }

            function listFunc(){           
            $funcionarios = Funcionario::all();
            return view("Funcionarios\listarfuncionario")->with("funcionarios", $funcionarios);       
    }

    function forVincular(){
        $funcionarios= Funcionario::all();
        $caminhaoes=Caminhao::all();

        return view('vincular')->with("funcionarios", $funcionarios);  ;
    }
}
