<?php

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

Route::get('/', 'PrincipalController@index')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@index')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/contato', 'ContatoController@store')->name('site.store');

Route::get('/login', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao:padrao')->prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return "Clientes";
    })
        ->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function () {
        return "Produtos";
    })->name('app.produtos');
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para página inicial';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
