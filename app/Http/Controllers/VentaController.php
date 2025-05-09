<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Venta::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id', 
            'fecha' => 'required|string|max:255',
            'total' => 'required|numeric',
            
        ]);

        $venta = Venta::create($request->all());

        return response()->json($venta, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        return response()->json($venta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id', 
            'fecha' => 'required|string|max:255',
            'total' => 'required|numeric',
            
        ]);

        $venta->update($request->all());

        return response()->json($venta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();

        return response()->json(null, 204);
    }
}
