<?php
// Definir las rutas para los productos
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\Api\TaskController;



//defunimos la ruta para la autenticacion
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

// Definir las rutas para los productos, clientes, proveedores, ventas y compras
 Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/productos', ProductoController::class);
    Route::apiResource('/clientes', ClienteController::class);
    Route::apiResource('/proveedores', ProveedorController::class);
    Route::apiResource('/ventas', VentaController::class);
    Route::apiResource('/compras', CompraController::class);
    Route::apiResource('tasks', TaskController::class);
    Route::post('/logout', [\App\Http\Controllers\LogoutController::class, 'logout']);
    
 });




