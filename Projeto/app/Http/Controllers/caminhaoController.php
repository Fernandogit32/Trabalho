<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class caminhaoController extends Controller
{
    function forCadasCam(){
        return view('cadastroCaminhao');
    }
}
