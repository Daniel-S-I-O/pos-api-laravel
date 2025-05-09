<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Proveedores::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'sometimes|string|max:255'
        ]);

        $proveedor = Proveedores::create($request->all());
        return response()->json($proveedor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedores)
    {
        return response()->json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedores $proveedores)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'sometimes|string|max:255'
        ]);
        $proveedores->update($request->all());
        return response()->json($proveedores);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedores $proveedores)
    {
        $proveedores->delete();
        return response()->json(null, 204);
    }
}
