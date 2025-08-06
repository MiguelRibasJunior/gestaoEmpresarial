<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute;

Route::get('/', function(){
    return 'Pagina Principal (home)';
});

Route::get( '/cadastro', function(){
    return 'Página de cadastro de novo cliente';
});

Route::get('/login', function(){
    return 'Página de login de clientes ';
});

Route::get('/sobre', function(){
    return 'Página intitucional';
});

Route ::get ('/produtos', function(){
    return 'Produtos';
});

Route::get ('/produto/{produto_id}/{nome}/{categoria}',
    function(
        int $produto_id,
        String $nome = 'Produto não informado',
        String $categoria = 'Categoria Não informado'
    ){
        echo 'id do produto: '. $produto_id . ' Produto ' . $nome . ' categoria ' . $categoria ;
})->where('produto_id', '[0-9]+');

Route::prefix('/privado')->group(function(){
    Route::get ('/clientes', function(){
        echo 'Pagina clientes';
    })->name('adm.clientes');
    Route::get ('/fornecedores', function(){
        echo 'Pagina fornecedores';
    });
    Route::get('/login', function(){
        echo 'Tela de login do administrador';
    });
    Route::get('/dashboard', function(){
        echo 'Painel principal';
    });
    Route::get('/clientes', function(){
        echo 'Lista de clientes';
    });
    Route::get (
        '/clientes/{cliente_id}/{nome?}',
        function(
            String $cliente_id,
            String $nome = 'Produto Não informado',
        )   {
        echo 'id do cliente' . $cliente_id . ' Cliente: '. $nome ;
    })->where( 'cliente_id', '[A-Za-z]+');
    Route::get( '/fornecedores', function(){
        echo 'Lista de fornecedores';
    });
    Route:get('/produtos', function(){
        echo 'Lista de produtos cadastrados';
    });
    Route::get('/produto/slug', function(){
        echo 'Visualização de um produto por slug';
    });
});

//redirecionamento de rota

Route::get('admin/login', function(){
    echo 'rota 1!';
});
