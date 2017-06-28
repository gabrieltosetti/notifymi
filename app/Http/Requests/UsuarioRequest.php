<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'email' => 'required|max:50',
            'celular' => 'required|max:14',
            'telefone' => 'max:13',
            /*'rg' => 'required',*/
            'cpf' => 'required',
            'cidade' => 'required|max:30',
            'bairro' => 'required|max:40',
            'rua' => 'required|max:40',
            'numero' => 'required|max:6',
            'complemento' => 'max:40',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
        ];
    }
}
