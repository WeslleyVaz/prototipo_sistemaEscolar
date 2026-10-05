<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController
{
    public function cadastro_html(Request $request){
        return view('cadastro-usuario');
    }

    public function salvar_usuario(Request $request){

             $request->validate([
            'cpf' => 'required|unique:usuarios,cpf',
            'senha' => 'required|min:6'                     
            ]);
    

    try{

    $usuario = new Usuario();
    $usuario->cpf = $request->cpf;
    $usuario->senha = $request->senha;

    $usuario->save();
    return response()->json(['message' => 'Usuário cadastrado com sucesso!'], 200);

        } catch (\Throwable $th) {
        //throw $th;
        return response()->json(['message' => 'Erro ao cadastrar usuário: ' . $th->getMessage()], 500);
        }

    }

}
