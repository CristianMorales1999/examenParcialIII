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
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'nullable|string|max:500',
            'telefono' => 'nullable|string|max:20',
            'foto' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El nombre del cliente es obligatorio.',
            'nombres.string' => 'El nombre debe ser texto.',
            'nombres.max' => 'El nombre no puede tener más de 255 caracteres.',
            
            'apellidos.required' => 'El apellido del cliente es obligatorio.',
            'apellidos.string' => 'El apellido debe ser texto.',
            'apellidos.max' => 'El apellido no puede tener más de 255 caracteres.',
            
            'email.required' => 'El correo del cliente es obligatorio.',
            'email.email' => 'El correo debe tener un formato válido.',
            'email.max' => 'El correo no puede tener más de 255 caracteres.',
            
            'direccion.string' => 'La dirección debe ser texto.',
            'direccion.max' => 'La dirección no puede tener más de 500 caracteres.',
            
            'telefono.string' => 'El teléfono debe ser texto.',
            'telefono.max' => 'El teléfono no puede tener más de 20 caracteres.',
            
            'foto.file' => 'El archivo debe ser válido.',
            'foto.mimes' => 'La imagen debe ser de tipo: jpeg, png, jpg, gif, webp.',
            'foto.max' => 'La imagen no puede ser mayor a 2MB.',
        ];
    }
}
