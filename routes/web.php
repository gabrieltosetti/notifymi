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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/index', 'HomeController@index')->name('index');

//Route::get('/2', 'HomeController@index2')->name('home2');

//login
Route::get('/assistencias/login', 'LoginController@loginassistencia')->name('entrarassistencia');
Route::get('/cadastro', 'LoginController@cadastro')->name('cadastro');

//ADMIN
Route::get('/admin/home', 'AdminController@adminhome')->name('adminhome');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('entraradmin');
Route::post('/admin/login', 'Auth\AdminLoginController@Login')->name('entraradmin.submit');

//profile
Route::get('/perfil', 'ProfileController@perfil')->name('perfil');
Route::post('/perfil', 'ProfileController@mudaravatar')->name('perfil_post');

//Cliente
Route::get('/clientes/login', 'LoginController@logincliente')->name('entrarcliente');
Route::get('/clientes', 'ClienteController@lista')->name('clientes');
Route::get('/clientes/novo', 'ClienteController@novo')->name('novo_cliente');
Route::get('/clientes/detalhes/{id}/', 'ClienteController@detalhes')->name('detalhes_cliente');
Route::post('/clientes/adiciona', 'ClienteController@adiciona')->name('novo_cliente_post');
Route::delete('/clientes/remove/{id?}', 'ClienteController@remove')->name('remove_cliente');
Route::get('/clientes/edita/{id}', 'ClienteController@edita')->name('edita_cliente');

//permissoes
Route::get('/permissoes', 'PermissoesController@lista')->name('permissoes');
Route::get('/permissoes/novo', 'PermissoesController@novo')->name('novo_permissoes');

//cargos
Route::get('/cargos', 'CargosController@listacargos')->name('cargos');
Route::get('/cargos/novo', 'CargosController@novocargo')->name('novo_cargos');

//usuarios
Route::get('/usuarios/home', 'UsuarioController@usuariohome')->name('usuariohome');
Route::get('/usuarios', 'UsuarioController@lista')->name('usuarios');
Route::get('/usuarios/novo', 'UsuarioController@novo')->name('novo_usuario');
Route::get('/usuarios/detalhes/{id?}', 'UsuarioController@detalhes')->name('detalhes_usuario');
Route::post('/usuarios/adiciona', 'UsuarioController@adiciona')->name('novo_usuario_post');
Route::delete('/usuarios/remove/{id?}', 'UsuarioController@remove')->name('remove_usuario');
Route::get('/usuarios/edita/{id}', 'UsuarioController@edita')->name('edita_usuario');

//Consertos
Route::get('/consertos', 'ConsertoController@lista')->name('consertos');
Route::get('/consertos/novo', 'ConsertoController@novo')->name('novo_conserto');
Route::get('/consertos/detalhes', 'ConsertoController@detalhes')->name('detalhes_conserto');
Route::post('/consertos/adiciona', 'ConsertoController@adiciona')->name('novo_conserto_post');
Route::get('/consertos/remove/{id}', 'ConsertoController@remove')->name('remove_conserto');
Route::get('/consertos/edita/{id}', 'ConsertoController@edita')->name('edita_conserto');
