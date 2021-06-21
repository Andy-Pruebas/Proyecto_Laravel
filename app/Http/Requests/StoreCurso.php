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
            'name'=>'Required|max:10',
            'descripcion'=>'Required|min:10',
            'categoria'=>'Required'
        ];
    }
    public function attributes()
    {
        return[
            'name'=>'nombre del curso',
        ];
    }
    public function messages(){
        return[
            'descripcion.required'=>'Debe ingresar una descripción del curso',
        ];
    }
}
