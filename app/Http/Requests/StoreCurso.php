<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //posteriormente se agregará un paquete de validación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'name' => "NOMBRE DEL CURSO",
            'description' => "DESCRIPCIÓN",
            'category' => "CATEGORÍA"
        ];
    }

    public function messages()
    {
        return[
            'description.required' => 'Ingrese una descripción del curso'
        ];
    }
}
