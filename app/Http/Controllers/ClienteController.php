<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Response;


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
  //rota: ainda provisória
    public function listav2()
    {
      $clientes = Cliente::all();

        return view('cliente/lista_clientev2')->with('clientes', $clientes);
    }

    public function novo()
    {
        return view('cliente/novo_cliente');
    }

    //rota: novo_cliente_post
    public function adiciona(ClienteRequest $request)
    {
        if($request->hasFile('foto')){
            request()->file('foto')->store('perfil');
        }
        Cliente::create($request->all());

        return redirect('/clientes')->withInput();
    }

    //rota: detalhes_cliente
    public function detalhes($id)
    {
        $cliente = Cliente::find($id);
        return Response::json($cliente);
    }

    //rota: remove_cliente
    public function remove($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return;
    }
}
