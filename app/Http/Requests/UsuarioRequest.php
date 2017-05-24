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
            'email' => 'required|max:60',
            'cpf' => 'required|',
            'cidade' => 'max:50',
            'bairro' => 'max:50',
            'rua' => 'max:50',
            'celular' => 'required|max:15',
            'telefone' => 'max:15',
            'observacao' => 'max:255',
            'cargo' => 'max:20',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
            'observacao.max'       => 'O campo Observação não pode passar de :max caracteres.'
        ];
    }
}
