<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsertoRequest extends FormRequest
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
            'titulo' => 'required|max:20',
            'modelo' => 'required|max:50',
            'defeito' => 'required|max:255',
            'orcamento' => 'required|max:14',
            'data_entrega' => 'required|max:13',
            'observacao' => 'max:255',
            'id_usuario' => 'required|max:10',
            'id_assistencia' => 'required|max:10',
            'id_cliente' => 'required|max:10',
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
