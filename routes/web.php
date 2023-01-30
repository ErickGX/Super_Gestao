<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
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

Route::get ('/', [PrincipalController::class, 'principal'])->name('principal');

Route::get ('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('sobreNos');

Route::get ('/contato', [ContatoController::class, 'contato'])->name('contato');



Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function (string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos Aqui: $nome - $categoria - $assunto - $mensagem"; 
});




