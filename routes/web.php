<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return 'Olá, Seja bem vindo ErickGX'; 
}); */

Route::get ('/', [PrincipalController::class, 'principal'])->name('site.index'); 
Route::get ('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos'); 
Route::get ('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get ('/login', function(){ return 'Login' ; })->name('site.login');

Route::prefix('/app')->group(function(){
  
  Route::get ('/clientes', function(){ return 'Clientes' ; })->name('app.clientes');
  Route::get ('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
  Route::get ('/produtos', function(){ return 'Produtos' ; })->name('app.produtos');

});

 Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
   echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a pagina inicial';
});

//Route::redirect('/rota2', '/rota1'); // metodo de redirecionamento diretamente no objeto rota


/* Route::get('/contato/{nome}/{categoria_id}', // Rotas com parametros usando expressoes regulares
        function (
                    string $nome = 'Desconhecido', 
                    int $categoria_id = 1 // 1 - Categoria 
                 ){
                   echo "Estamos Aqui: $nome - $categoria_id"; 
                 })->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); */


