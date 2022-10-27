<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalaxyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'dimension' => 'required|numeric',
            'number_of_solar_systems' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'numeric' => 'O campo :attribute deve ser um número!',
            'max' => 'O campo :attribute deve conter no máximo 100 caracteres!'
        ];
    }
}
