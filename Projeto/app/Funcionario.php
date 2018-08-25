<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
   protected $fillable=[
    'nome',
    'cpf',
    'datadeNacimento',
    'telefone',
    'salario'
   

   ];
   protected $table = 'funcionarios';
   
   public function caminhao(){
    return $this->BelongsTo(Caminhao::class , 'id_caminhao');   
   }
}
