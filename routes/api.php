<?php
// Definir las rutas para los productos
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;

// Definir las rutas para los productos
Route::apiResource('/productos', ProductoController::class);
Route::apiResource('/proveedores', ProveedoresController::class);