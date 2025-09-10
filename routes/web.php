<?php
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'home'])->name('home');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.store');
Route::get('/sobre', [SobreNosController::class, 'about'])->name('about'); 
// Área administrativa
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/clientes', [AdminController::class, 'clientes'])->name('admin.clientes');
Route::get('/admin/clientes/{id}', [AdminController::class, 'clienteShow'])->name('admin.clientes.show');


/*Route::get ('/produto/{produto_id}/{nome}/{categoria}',
    function(
        int $produto_id,
        String $nome = 'Produto não informado',
        String $categoria = 'Categoria Não informado'
    ){
        echo 'id do produto: '. $produto_id . ' Produto ' . $nome . ' categoria ' . $categoria ;
})->where('produto_id', '[0-9]+')->name('produto.show');
/*
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
    /*Route::get('/clientes', function(){
        echo 'Lista de clientes';
    });
    Route::get (
        '/clientes/{cliente_id}/{nome?}',
        function(
            String $cliente_id,
            String $nome = 'Produto Não informado'
        )   {
        echo 'id do cliente' . $cliente_id . ' Cliente: '. $nome ;
    })->where( 'cliente_id', '[A-Za-z]+');
    Route::get( '/fornecedores', function(){
        echo 'Lista de fornecedores';
    });
    Route::get('/produtos', function(){
        echo 'Lista de produtos cadastrados';
    });
    Route::get('/produto/slug', function(){
        echo 'Visualização de um produto por slug';
    });
});*/

//redirecionamento de rota
/*
Route::get('admin/login', function(){
    echo 'rota 1!';
}); */
