<?php

namespace App\Http\Controllers;
use App\Conserto;
use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;

class ConsertoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
      $consertos = Conserto::all();
        return view('conserto/lista_conserto')->with('consertos', $consertos);
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
        public function detalhes()
        {
            $usuarios = Usuario::orderBy('nome')->get(['nome']);
            $usuarios = $usuarios->pluck("nome");

            $conserto = Conserto::find(1);

            return view('conserto/detalhes_conserto')->with(['usuarios'=> $usuarios, 'conserto' => $conserto]);
        }

        //rota: remove_conserto
        public function remove($id)
        {
            $conserto = Conserto::find($id);
            $conserto->delete();

            return redirect()->action('ConsertoController@lista');
        }
}
