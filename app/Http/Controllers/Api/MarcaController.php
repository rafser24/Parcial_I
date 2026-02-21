<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use App\Http\Requests\GuardarMarcaRequest;

class MarcaController extends Controller
{
    // Listar (Index)
    public function index()
    {
        $marcas = Marca::all();
        return response()->json($marcas, 200);
    }

    // Crear (Store)
    public function store(GuardarMarcaRequest $request)
    {
        // El $request->validated() ya trae los datos limpios y validados
        $marca = Marca::create($request->validated());
        return response()->json(['message' => 'Marca creada con éxito', 'data' => $marca], 201);
    }

    // Leer uno solo (Show) - Opcional pero buena práctica
    public function show(Marca $marca)
    {
        return response()->json($marca, 200);
    }

    // Editar (Update)
    public function update(GuardarMarcaRequest $request, Marca $marca)
    {
        $marca->update($request->validated());
        return response()->json(['message' => 'Marca actualizada', 'data' => $marca], 200);
    }

    // Eliminar (Delete)
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return response()->json(['message' => 'Marca eliminada correctamente'], 200);
    }
}