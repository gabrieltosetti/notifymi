<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome'          => 'required|max:50',
            'email'         => 'required|max:50|unique:clientes,email',
            'celular'       => 'required|max:14',
            'telefone'      => 'max:13',
            'rg'            => 'required|unique:clientes,rg',
            'cpf'           => 'required|unique:clientes,cpf',
            'cidade'        => 'required|max:30',
            'bairro'        => 'required|max:40',
            'rua'           => 'required|max:40',
            'numero'        => 'required|max:6',
            'complemento'   => 'max:40',
            'senha'         => 'required',
            'confirmar'     => 'required|same:senha',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'confirmar.required'  => 'O campo confirmar senha não pode ser vazio.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
            'email.unique'       => 'Este e-mail já está sendo usado.',
            'confirmar.same'       => 'As senhas não estão iguais.',
            'unique'       => ':attribute já usado.',
        ];
    }
}
