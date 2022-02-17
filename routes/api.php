<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

//use locationcontroller/OrderController as OrderController;
//use App\Http\Controllers\ClienteController;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

 Route::resource('cachorros',App\Http\Controllers\CachorroController::class);
 
 Route::resource('gatos',App\Http\Controllers\GatoController::class);
 Route::resource('ratos',App\Http\Controllers\RatoController::class);
 Route::resource('empresas',App\Http\Controllers\EmpresaController::class);
 Route::resource('negocios',App\Http\Controllers\NegocioController::class);