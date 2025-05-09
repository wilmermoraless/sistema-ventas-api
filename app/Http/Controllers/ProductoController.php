<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

// Cliente
// Venta
// Compra
// ProductoVenta
// ProductoCompra
// Proveedor

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'sometimes|string|max:255',
            'precio' => 'required|numeric',
            'costo' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::create($request->all());

        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'sometimes|string|max:255',
            'precio' => 'required|numeric',
            'costo' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto->update($request->all());

        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}
