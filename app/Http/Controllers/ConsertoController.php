<?php

namespace App\Http\Controllers;
use App\Conserto;
use App\Usuario;
use App\Atividade;
use App\Atividade_comentario;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

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
