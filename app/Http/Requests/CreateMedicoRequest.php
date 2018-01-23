<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMedicoRequest extends FormRequest
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
           'direccion' => ['required', 'max:160'] 
        ];
    }

    public function medicos() {
        return [
            'direccion.required' => 'Por favor, escribe tu direccion',
            'direccion.max' => 'El mensaje no puede  superar los 160 caracteres.'
        ];
    }
}
