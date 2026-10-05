<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


route::post('/salvar-usuario', [App\Http\Controllers\UsuarioController::class, 'salvar_usuario']);
