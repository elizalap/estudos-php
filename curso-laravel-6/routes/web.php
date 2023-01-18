<?php

use Illuminate\Support\Facades\Route;

//ROTAS CRUD
Route::resource('products', 'ProdutosController'); //->middleware('auth');

/* FORMA MAIS ESPECÍFICA DO CRUD
//Edita um produto especifico
Route::put('products/{id}', 'ProductController@update')->name('products.update');
//Formulario para edicao de um produto
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
//Formulario de cadastro de um produto
Route::get('/products/create', 'ProductController@create')->name('products.create');
//Listagem de produtos espeificos
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');
//Listagem de todos os produtos
Route::get('/products', 'ProductController@index')->name('products.index');
//Registra um produto
Route::post('/products', 'ProductController@store')->name('products.store');
//Exclui um produto 
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
*/

Route::get('/login', function () {
    return 'Login';
})->name('login');

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

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('products');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});

//Route::redirect('redirect1', 'redirect2');

// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });

// Route::get('redirect2', function () {
//     return 'Redirect 02';
// });
// 

Route::get('/', function () {
    return view('welcome');
});
