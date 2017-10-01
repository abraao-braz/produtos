<?php

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

use App\Produto;
use App\Categoria;


Route::get('/', function () {
    return view('inicial')->with(['categorias'=>Categoria::with('produtos')->get()]);
});



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutoController@index')->name('produto');

Route::get('/produtos/cadastro','ProdutoController@cadastro')->name('produto.cadastro');

Route::get('/produtos/remove/{id?}','ProdutoController@remove')->name('produto.remove');

Route::get('/produtos/edit/{id?}','ProdutoController@edit')->name('produto.edit');

Route::post('/produtos/edit/{id?}','ProdutoController@edit')->name('produto.edit');

Route::post('/produtos/insert','ProdutoController@insert')->name('produto.salvar');


Route::get('/categorias', 'CategoriaController@index')->name('categoria');
Route::get('/categorias/cadastro', 'CategoriaController@cadastro')->name('categoria.cadastro');
Route::post('/categorias/insert', 'CategoriaController@insert')->name('categoria.insert');

