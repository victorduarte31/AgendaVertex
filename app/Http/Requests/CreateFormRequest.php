<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'nome'      => 'required|min:3|max:50|',
            'email'     => "required|email|max:150|unique:agendas,email,{$this->id},id",
            'telefone'    => 'required|max:20',
            'cep'       => 'required|min:8',
        ];
    }
}
