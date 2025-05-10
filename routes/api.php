<?php
// Definir las rutas para los productos
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ClientesController;

// Definir las rutas para los productos
Route::apiResource('/productos', ProductoController::class);
Route::apiResource('/proveedores', ProveedoresController::class);
Route::apiResource('/clientes', ClientesController::class);