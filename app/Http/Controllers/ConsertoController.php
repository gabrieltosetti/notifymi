<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsertoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
        return view('conserto/lista_conserto');
    }

    public function novo()
    {
        return view('conserto/novo_conserto');
    }
        public function adiciona(ConsertoRequest $request)
        {

            request()->file('foto')->store('perfil');
            Conserto::create($request->all());

            return redirect('/consertos')->withInput();
        }

        //rota: detalhes_conserto
        public function detalhes($id)
        {
            $conserto = Conserto::find($id);
            $conserto->{"cargo"} = $conserto->cargo->id;

            return Response::json($conserto);
        }

        //rota: remove_conserto
        public function remove($id)
        {
            $conserto = Conserto::find($id);
            $conserto->delete();

            return redirect()->action('ConsertoController@lista');
        }
}
