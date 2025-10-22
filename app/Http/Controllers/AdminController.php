<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Página de login do admin
    public function login()
    {
        return view('admin.login');
    }

    // Dashboard 
    public function dashboard(Request $request)
    {
        
        return view('admin.dashboard');
    }

    
    public function clientes()
    {
        $clientes = \App\Models\User::all(); 
        return view('admin.clientes.index', compact('clientes'));
    }

    // Detalhes de um cliente
    public function clienteShow($id)
    {
        
        $cliente = [
            'id' => $id,
            'nome' => "Cliente $id",
            'email' => "cliente{$id}@email.com",
            'telefone' => '9xxxx-xxxx',
        ];

        return view('admin.clientes.show', compact('cliente'));
    }
}