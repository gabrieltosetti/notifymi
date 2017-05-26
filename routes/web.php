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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Consertos
Route::get('/consertos', 'ConsertoController@lista')->name('consertos');
Route::get('/consertos/novo', 'ConsertoController@novo')->name('novo_conserto');

//login
Route::get('/entrar', 'LoginController@login')->name('entrar');
Route::get('/entrar/cadastro', 'LoginController@cadastro')->name('cadastro');


//Consertos
Route::get('/clientes', 'ClienteController@lista')->name('clientes');
Route::get('/clientes/novo', 'ClienteController@novo')->name('novo_cliente');

//usuarios
Route::get('/usuarios', 'UsuarioController@lista')->name('usuarios');
Route::get('/usuarios/novo', 'UsuarioController@novo')->name('novo_usuario');

Route::get('/usuarios/detalhes/{id}/', 'UsuarioController@detalhes')->name('detalhes_usuario');
Route::post('/usuarios/adiciona', 'UsuarioController@adiciona')->name('novo_usuario_post');
Route::get('/usuarios/remove/{id}', 'UsuarioController@remove')->name('remove_usuario');
Route::get('/usuarios/edita/{id}', 'UsuarioController@edita')->name('edita_usuario');

Auth::routes();
