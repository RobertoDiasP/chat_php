<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function paginalogar()
    {
        
        return view('usuario.login');
    }

    public function criarConta()
    {
        
        return view('usuario.criarconta');
    }

    public function home2()
    {
        
        return view('usuario.sign-up');
    }

    public function teste()
    {
        
        return response()->json(['message' => 'Registro atualizado com sucesso']);
    }

}
