<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
{
    $produtos = [
        [
            'id' => 1,
            'nome' => 'Camiseta Element',
            'imagem' => 'https://images.tcdn.com.br/img/img_prod/560775/180_camiseta_element_vertical_preto_9811_2_6cb8390c5a74bad4e8e72435452a2c2e.jpg',
            'categoria' => 'Roupas',
            'descricao' => 'Camiseta 100% algodão, super confortável e resistente.',
            'preco' => '79.90'
        ],
        [
            'id' => 2,
            'nome' => 'Tênis Esportivo Confort',
            'imagem' => 'https://sneakernews.com/wp-content/uploads/2023/11/nike-dunk-low-gs-year-of-the-dragon-2.jpg?w=767',
            'categoria' => 'Calçados',
            'descricao' => 'Tênis esportivo com amortecimento e design moderno.',
            'preco' => '199.90'
        ],
        [
            'id' => 3,
            'nome' => 'Mochila Escolar Resistente',
            'imagem' => 'https://tse1.mm.bing.net/th/id/OIP.tcC97z9s9T-V9jHqrgVp2wAAAA?cb=ucfimgc2&rs=1&pid=ImgDetMain&o=7&rm=3',
            'categoria' => 'Acessórios',
            'descricao' => 'Mochila com vários compartimentos e material resistente.',
            'preco' => '129.90'
        ],
        
    ];

    return view('pages.produtos.index', compact('produtos'));
}
   public function show($id)
{
    $todos_produtos = [
        1 => [
            'id' => 1,
            'nome' => 'Camiseta Element',
            'imagem' => 'https://images.tcdn.com.br/img/img_prod/560775/180_camiseta_element_vertical_preto_9811_2_6cb8390c5a74bad4e8e72435452a2c2e.jpg',
            'categoria' => 'Roupas',
            'descricao' => 'Camiseta 100% algodão, super confortável e resistente.',
            'preco' => '79.90'
        ],
        2 => [
            'id' => 2,
            'nome' => 'Tênis Esportivo Confort',
            'imagem' => 'https://sneakernews.com/wp-content/uploads/2023/11/nike-dunk-low-gs-year-of-the-dragon-2.jpg?w=767',
            'categoria' => 'Calçados',
            'descricao' => 'Tênis esportivo com amortecimento e design moderno.',
            'preco' => '199.90'
        ],
        3 => [
            'id' => 3,
            'nome' => 'Mochila Escolar Resistente',
            'imagem' => 'https://tse1.mm.bing.net/th/id/OIP.tcC97z9s9T-V9jHqrgVp2wAAAA?cb=ucfimgc2&rs=1&pid=ImgDetMain&o=7&rm=3',
            'categoria' => 'Acessórios',
            'descricao' => 'Mochila com vários compartimentos e material resistente.',
            'preco' => '129.90'
        ],
    ];

    $produto = $todos_produtos[$id] ?? null;

    if(!$produto){
        abort(404);
    }

    return view('pages.produtos.show', compact('produto'));
}
}