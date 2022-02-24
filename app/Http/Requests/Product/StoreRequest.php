<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=> 'required|string|unique:products|max:255',
            'sell_price'=>'required|',
            'code'=> 'nullable|string|max:8|min:8',
        ];
    }
     public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 50 caracteres.',
            'name.unique'=>'Ya se encuentra registrado este nombre.',

            'sell_price.required'=>'Este campo es requerido.',


            'code.string'=>'El valor no es correcto.',
            'code.max'=>'Solo se permite 8 digitos.',
            'code.min'=>'Re requieren minimo 8 digitos.',
        ];
    }
}
