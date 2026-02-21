<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Http\Requests\GuardarCategoriaRequest;

class CategoriaController extends Controller
{
    // Listar todas las categorías
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias, 200);
    }

    // Guardar una nueva categoría
    public function store(GuardarCategoriaRequest $request)
    {
        $categoria = Categoria::create($request->validated());
        return response()->json([
            'mensaje' => 'Categoría creada con éxito',
            'data' => $categoria
        ], 201);
    }

    // Mostrar una categoría en específico
    public function show(Categoria $categoria)
    {
        return response()->json($categoria, 200);
    }

    // Actualizar una categoría existente
    public function update(GuardarCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return response()->json([
            'mensaje' => 'Categoría actualizada con éxito',
            'data' => $categoria
        ], 200);
    }

    // Eliminar una categoría
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json([
            'mensaje' => 'Categoría eliminada correctamente'
        ], 200);
    }
}