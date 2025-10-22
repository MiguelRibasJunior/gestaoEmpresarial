<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    // Listar produtos admin
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.products.index', compact('produtos'));
    }

    // Exibir formulário 
    public function create()
    {
        return view('admin.products.create');
    }

    // Salvar novo produto com imagem
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // imagem png
        $path = $request->file('imagem')->store('produtos', 'public');

        
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $path,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produto cadastrado com sucesso!');
    }
}