<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class GuardarMarcaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambiar a true para permitir que cualquiera haga la petición
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'estado' => 'boolean'
        ];
    }
}