<?php

namespace App\Http\Controllers;
use App\Conserto;
use App\Usuario;
use App\Cliente;
use App\Atividade;
use App\Atividade_comentario;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Auth;

class ConsertoController extends Controller
{
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('auth');
=======

      if (Auth::guard()->check())
        $auth = 'auth';
      else
        $auth = 'auth:admin';

        $this->middleware($auth);
>>>>>>> afdc02589af20a3c37180afbf4a0583d325b2677
    }

    public function lista()
    {
      $consertos = Conserto::all();
        return view('conserto/lista_conserto')->with('consertos', $consertos);
    }

    public function novo()
    {

      $idassistencia =  Auth::user()->id_assistencia;
      $usuarios = Usuario::all()->where('id_assistencia', $idassistencia);

      $clientes = Cliente::all()->where('permissao', '0');
      return view('conserto/novo_conserto')->with(['clientes'=> $clientes, 'funcionarios' =>$usuarios]);
    }

    public function adiciona(ConsertoRequest $request)
    {

      
        Conserto::create($request->all());

        return redirect('/consertos')->withInput();
    }


    public function detalhes()
    {
        $usuarios = Usuario::orderBy('nome')->get(['nome']);
        $usuarios = $usuarios->pluck("nome");

        $conserto = Conserto::find(1);
        $atividades = Atividade::where('id_conserto', 1)->orderBy('id', 'desc')->get();
        foreach ($atividades as $atividade)
        {
//$atividade->id
            $comentarios[$atividade->id] = Atividade_comentario::where('id_atividade', $atividade->id)->orderBy('id')->get();
        }

        return view('conserto/detalhes_conserto')->with(['usuarios'=> $usuarios, 'conserto' => $conserto, 'atividades' => $atividades, 'comentarios' => $comentarios]);
    }

    //rota: remove_conserto
    public function remove($id)
    {
        $conserto = Conserto::find($id);
        $conserto->delete();

        return redirect()->action('ConsertoController@lista');
    }

    public function nova_atividade(Request $request)
    {
        $atividade = Atividade::create($request->all());
        //$iniciada = Carbon::now();
        $card = [
            'id' => $atividade->id,
            'status' => $atividade->status,
            'iniciada' => $atividade->iniciada->format('d/m/Y H:i'),
            'finalizada' => $atividade->finalizada == null ? "Não definido" : $atividade->finalizada->format('d/m/Y H:i'),
            'titulo' => $atividade->titulo,
            'descricao' => $atividade->descricao,
        ];

        //$atividade->iniciada = $atividade->iniciada->format('d/m/Y H:i');
        //$atividade->finalizada = $atividade->finalizada == null ? "Não definido" : $atividade->finalizada->format('d/m/Y H:i');

        return Response::json($card);
    }
}
