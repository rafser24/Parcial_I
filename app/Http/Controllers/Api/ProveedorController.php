<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use App\Http\Requests\GuardarProveedorRequest;

class ProveedorController extends Controller
{
    // Listar todos los proveedores
    public function index()
    {
        $proveedores = Proveedor::all();
        return response()->json($proveedores, 200);
    }

    // Guardar un nuevo proveedor
    public function store(GuardarProveedorRequest $request)
    {
        $proveedor = Proveedor::create($request->validated());
        return response()->json([
            'mensaje' => 'Proveedor creado con éxito',
            'data' => $proveedor
        ], 201);
    }

    // Mostrar un proveedor en específico
    public function show(Proveedor $proveedor)
    {
        return response()->json($proveedor, 200);
    }

    // Actualizar un proveedor existente
    public function update(GuardarProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->validated());
        return response()->json([
            'mensaje' => 'Proveedor actualizado con éxito',
            'data' => $proveedor
        ], 200);
    }

    // Eliminar un proveedor
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return response()->json([
            'mensaje' => 'Proveedor eliminado correctamente'
        ], 200);
    }
}