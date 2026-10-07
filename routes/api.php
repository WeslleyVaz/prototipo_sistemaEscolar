<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/salvar-usuario', [UsuarioController::class, 'salvar_usuario'])->name('api.usuarios.store');

Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario']);

Route::get('/todo_usuarios', [UsuarioController::class, 'todo_usuarios']);

Route::get('/usuario_simples', [UsuarioController::class, 'usuario_simples']);

Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario']);

Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario']);
