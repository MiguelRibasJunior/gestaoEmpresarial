<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Página de login do admin
    public function login()
    {
        return view('pages.admin.login');
    }

    // Dashboard do admin
    public function dashboard(Request $request)
    {
        // Aqui você poderia implementar autenticação real
        // Por enquanto, só retorna a view
        return view('pages.admin.dashboard');
    }

    // Listagem de clientes
    public function clientes()
    {
        // Para teste, pode enviar um array de clientes
        $clientes = [
            ['id' => 1, 'nome' => 'Leandro Bona'],
            ['id' => 2, 'nome' => 'Maria Silva'],
        ];

        return view('pages.admin.clientes.index', compact('clientes'));
    }

    // Detalhes de um cliente
    public function clienteShow($id)
    {
        // Exemplo simples de cliente
        $cliente = [
            'id' => $id,
            'nome' => "Cliente $id",
            'email' => "cliente{$id}@email.com",
            'telefone' => '9xxxx-xxxx',
        ];

        return view('pages.admin.clientes.show', compact('cliente'));
    }
}