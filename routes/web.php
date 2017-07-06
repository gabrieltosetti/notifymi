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

Auth::routes();

Route::get('/', 'HomeController@index2')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/2', 'HomeController@index2')->name('home2');

//Consertos
Route::get('/consertos', 'ConsertoController@lista')->name('consertos');
Route::get('/consertos/novo', 'ConsertoController@novo')->name('novo_conserto');

//login
Route::get('/entrar/assistencia', 'LoginController@loginassistencia')->name('entrarassistencia');
Route::get('/entrar/cliente', 'LoginController@logincliente')->name('entrarcliente');
Route::get('/entrar/cadastro', 'LoginController@cadastro')->name('cadastro');

  //admin Login
  Route::get('/adminindex', 'AdminController@index')->name('admin');
  Route::get('/entrar/admin', 'Auth\AdminLoginController@showLoginForm')->name('entraradmin');
  Route::post('/entrar/admin', 'Auth\AdminLoginController@Login')->name('entraradmin.submit');


//profile
Route::get('/profile', 'ProfileController@perfil')->name('perfil');
Route::post('/profile', 'ProfileController@mudaravatar')->name('perfil_post');

//Cliente
Route::get('/clientes', 'ClienteController@lista')->name('clientes');
Route::get('/clientes/novo', 'ClienteController@novo')->name('novo_cliente');



Route::get('/clientes/detalhes/{id}/', 'ClienteController@detalhes')->name('detalhes_cliente');
Route::post('/clientes/adiciona', 'ClienteController@adiciona')->name('novo_cliente_post');
Route::get('/clientes/remove/{id}', 'ClienteController@remove')->name('remove_cliente');
Route::get('/clientes/edita/{id}', 'ClienteController@edita')->name('edita_cliente');

//usuarios
Route::get('/usuarios', 'UsuarioController@lista')->name('usuarios');
Route::get('/usuarios/novo', 'UsuarioController@novo')->name('novo_usuario');

//permissoes
Route::get('/permissoes', 'PermissoesController@lista')->name('permissoes');
Route::get('/permissoes/novo', 'PermissoesController@novo')->name('novo_permissoes');

//cargos
Route::get('/cargos', 'CargosController@listacargos')->name('cargos');
Route::get('/cargos/novo', 'CargosController@novocargo')->name('novo_cargos');


Route::get('/usuarios/detalhes/{id?}', 'UsuarioController@detalhes')->name('detalhes_usuario');
Route::post('/usuarios/adiciona', 'UsuarioController@adiciona')->name('novo_usuario_post');
Route::get('/usuarios/remove/{id}', 'UsuarioController@remove')->name('remove_usuario');
Route::get('/usuarios/edita/{id}', 'UsuarioController@edita')->name('edita_usuario');
