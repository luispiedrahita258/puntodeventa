<?php

namespace App\Http\Requests\Client;

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
            'name'=>'required|string|max:255',
            'dni'=>'required|string|unique:clients|max:16|min:8',
            'ruc'=>'required|string|unique:clients|max:16|min:8',
            'address'=>'required|string|max:255',
            'phone'=>'required|string|unique:clients|max:16|min:8',
            'email'=>'required|string|unique:clients|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'dni.required'=>'Este campo es requerido.',
            'dni.string'=>'El valor no es correcto.',
            'dni.max'=>'Solo se permite 16 caracteres.',
            'dni.min'=>'Se requiere 8 caracteres.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',


            'ruc.unique'=>'El número de RUC ya se encuentra registrado.',
            'ruc.string'=>'El valor no es correcto.',
            'ruc.max'=>'Solo se permite 16 caracteres.',
            'ruc.min'=>'Se requiere 8 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permiten 255 caracteres.',

            'phone.unique'=>'El número de celular ya se encuentra registrado.',
            'phone.string'=>'El valor no es correcto.',
            'phone.min'=>'Se requiere minimo 8 caracteres.',
            'phone.max'=>'Solo se permite 16 caracteres.',

            'email.unique'=>'La dirección de correo electronico ya se encuentra registrado.',
            'email.string'=>'El valor no es correcto.',
            'email.email'=>'No es un correo electronico.',
            'email.max'=>'Solo se permite 255 caracteres.',
        ];
    }
}
