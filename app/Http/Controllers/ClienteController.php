<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
      $clientes = Cliente::all();

        return view('cliente/lista_cliente')->with('clientes', $clientes);
    }

    public function novo()
    {
        return view('cliente/novo_cliente');
    }

    //rota: novo_cliente_post
    public function adiciona(ClienteRequest $request)
    {

        request()->file('foto')->store('perfil');
        Cliente::create($request->all());

        return redirect('/clientes')->withInput();
    }

    //rota: detalhes_cliente
    public function detalhes($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente/detalhes_cliente')->with('cliente', $cliente);
    }

    //rota: remove_cliente
    public function remove($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->action('ClienteController@lista');
    }
}
