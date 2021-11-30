<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreController;
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

Route::get('/', [HomeController::class, 'home'])->name('site.index');
Route::get('/sobre-nos', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato',[ContatoController::class, 'saveContato'])->name('site.saveContato');;
Route::get('/login',[ContatoController::class, 'contato'])->name('site.login');

Route::prefix('/app')->group(function ()
{
    Route::get('/clientes', function(){
        echo "clientes";
    })->name('app.clientes');
    Route::get('/fornecedores',[FornecedorController::class, 'index'])->name('app.fornecedores');;
    Route::get('/produtos', function(){
        echo "produtos";
    })->name('app.produtos');
});

Route::fallback(function()
{
   echo"Essa página não existe <a href=".route('site.index')."> Volte a pagina home</a>";
});

