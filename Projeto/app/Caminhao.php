<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caminhao extends Model
{
   protected $fillable =[
    'placa',
    'modelo',
    'marca',
    'cor',
    'ano',
    'renavan',
    'id_funcionario'
   ];

   protected $table = 'caminhoes';

   public function funcionario(){
    return $this->BelongsTo(Funcionario::class , 'id_funcionario');   
   }
}
