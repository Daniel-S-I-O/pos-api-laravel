<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Clientes::all());
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
            'apellido' => 'required|string|max:255'
        ]);

        $Clientes = Clientes::create($request->all());

        return response()->json($Clientes, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        return response()->json($clientes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientesRequest $request, Clientes $clientes)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apeliido' => 'required|string|max:255'
        ]);

        $clientes->update($request->all());

        return response()->json($clientes);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes)
    {
         $clientes->delete();
        return response()->json(null, 204);
    }
}
