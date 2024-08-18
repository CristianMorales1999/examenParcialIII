<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El nombre del cliente es obligatorio.',
            'apellidos.required' => 'El apellido del cliente es obligatorio.',
            'email.required' => 'El correo del cliente es obligatorio.',
            'direccion.required' => 'La dirección del cliente es obligatorio.',
            'telefono.required' => 'El teléfono del cliente es obligatorio.',
        ];
    }
}
