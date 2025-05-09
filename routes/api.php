<?php
// Definir las rutas para los productos
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CompraController;





// Definir las rutas para los productos
Route::apiResource('/productos', ProductoController::class);
Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/proveedores', ProveedorController::class);
Route::apiResource('/ventas', VentaController::class);
Route::apiResource('/compras', CompraController::class);

