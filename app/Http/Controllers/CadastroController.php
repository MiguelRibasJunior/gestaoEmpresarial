<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('pages.cadastro');
    }

// Processar o formulário
    public function store(Request $request)
    {
        // Validação simples
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'senha' => 'required|string|min:6',
        ]);

        // Redireciona de volta com mensagem de sucesso
        return redirect()->route('cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
}