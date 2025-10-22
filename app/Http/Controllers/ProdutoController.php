<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Lista pública de produtos visiveis
    public function index()
    {
        $produtos = Produto::all(); // busca todos os produtos do banco de dados
        return view('pages.produtos.index', compact('produtos'));
    }

    // Detalhes de um produto especifico 
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('pages.produtos.show', compact('produto'));
    }
}