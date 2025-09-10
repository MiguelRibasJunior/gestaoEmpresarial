<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function autenticar(Request $request)
    {
        // Validação simples só para simulação
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string|min:6',
        ]);

        // Redireciona com mensagem de sucesso
        return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
    }
}