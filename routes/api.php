<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

//use locationcontroller/OrderController as OrderController;
//use App\Http\Controllers\ClienteController;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('valorants', App\Http\Controllers\ValorantController::class);
