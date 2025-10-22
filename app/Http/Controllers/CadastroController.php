<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('pages.cadastro');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'Cpf' => 'required|string|max:14|unique:users,Cpf',
            'email' => 'required|email|unique:users,email',
            'whatsapp' => 'nullable|string',
            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|max:2',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Cria o usuário
        User::create([
            'name' => $request->name,
            'sobrenome' => $request->sobrenome,
            'Cpf' => $request->Cpf,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'password' => Hash::make($request->password), 
        ]);

        
        return redirect()->route('login');
    }
}