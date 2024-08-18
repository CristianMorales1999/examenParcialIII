<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El título del servicio es obligatorio.',
            'titulo.max' => 'El título del servicio no puede superar los 255 caracteres.',
            'descripcion.required' => 'La descripción del servicio es obligatoria.',
        ];
    }
}
