<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formFuncionarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [     
               
            'nome' => 'required|min:2',
            'cpf' => 'required|max:25',
            'datadeNacimento' => 'required|max:6|min:3',
            'telefone'=>'required|max:10|min:10',
            'salario'=>'required|max:6|min:3'
        ];
    }
}
