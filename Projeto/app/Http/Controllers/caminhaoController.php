<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Caminhao;
use App\Http\Requests\formCaminhaoRequest;
use App\Funcionario;

class caminhaoController extends Controller
{
    



    function forCadasCamin() 
    {
        return view('Caminhoes\cadastroCaminhao');
    }



    function CadasCamin(formCaminhaoRequest $request) 
    {
       $param = $request->all();
       Caminhao::create($param);
       return redirect()->action("caminhaoController@forCadasCamin");    
    }

    function listCamin(){           
        $caminhoes = Caminhao::all();    
        return view("Caminhoes\listarCaminhoes")->with("caminhoes", $caminhoes);       
}

}
