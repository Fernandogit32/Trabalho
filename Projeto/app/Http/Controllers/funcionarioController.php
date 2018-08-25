<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class funcionarioController extends Controller
{
    function forCadasFunc(){
        return view('cadastroFuncionario');
    }
}
