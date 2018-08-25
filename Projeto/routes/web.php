<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//-------------------rotas de crud funcionario---------------

Route::get('/formFuncionario', 'funcionarioController@forCadasFunc');
Route::post('/formFuncionario/cadastro', 'funcionarioController@CadasFunc');


//-------------------rotas de crud caminhão---------------


Route::get('/formCaminhao', 'caminhaoController@forCadasCam');

