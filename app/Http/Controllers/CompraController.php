<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Compra::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:producto,id', 
            'compra_id' => 'required|exists:compra,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            
        ]);

        $compra->update($request->all());

        return response()->json($compra);
    }

    /**
     * Display the specified resource.
     */
    public function show(Compra $compra)
    {
        return response()->json($compra);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compra $compra)
    {
        $request->validate([
            'producto_id' => 'required|exists:producto,id', 
            'compra_id' => 'required|exists:compra,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            
        ]);

        $compra->update($request->all());

        return response()->json($compra);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compra $compra)
    {
        $compra->delete();

        return response()->json(null, 204);
    }
}
