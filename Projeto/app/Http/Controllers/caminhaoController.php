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

    function listCamin()
    {           
        $caminhoes = Caminhao::all();    
        return view("Caminhoes\listarCaminhoes")->with("caminhoes", $caminhoes);       
    }


	

	

     function excluircaminhao(request $request) 
    {      
        
      $caminhao =  Caminhao::find($request->id);
      if($caminhao->funcionario != null){
        $funcionario = Funcionario::find($caminhao->funcionario->id);
        $funcionario->caminhao_id = null;        
        $funcionario->save();
        $caminhao->delete();
      } else{
        $caminhao->delete();
      }    
        return redirect()->action("caminhaoController@listCamin");
    }


    function formEditarCaminhao(Request $request) 
    {        
        $caminhao = Caminhao::find($request->id);
        return view("caminhoes/editarCaminhao")->with("caminhao", $caminhao);        
    }


   
}
