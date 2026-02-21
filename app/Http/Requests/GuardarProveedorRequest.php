<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class GuardarProveedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:50',
            'estado' => 'boolean'
        ];
    }
}