<?php

namespace App\Http\Controllers;
use App\Conserto;
use App\Usuario;
use App\Cliente;
use App\Atividade;
use App\Atividade_Comentario;
use App\Conserto_Mensagem;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Auth;

class ConsertoController extends Controller
{
    public function __construct()
    {
      $guards = array_keys(config('auth.guards'));
      foreach ($guards as $guard) {
        if(Auth::guard($guard)->check()) {
          $this->middleware($guard);
            }
        else {
          $this->middleware('auth');
        }
      }

    }

    public function lista()
    {
      $idassistencia =  Auth::user()->id_assistencia;

      $consertos = Conserto::where('id_assistencia', '=', $idassistencia)->get();

      $teste = Conserto::where('id_assistencia', '=' , $idassistencia)->count();

        return view('conserto/lista_conserto')->with(['consertos'=> $consertos, 'teste' => $teste]);
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

      if($request->hasFile('foto')){
          request()->file('foto')->store('perfil');
      }
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
            $comentarios[$atividade->id] = Atividade_comentario::where('id_atividade', $atividade->id)->orderBy('id')->get();
        }
        $mensagens = Conserto_Mensagem::where('id_conserto', 1)->orderBy('created_at', 'desc')->get();
        $contagem = [
          "mensagem" => [
            "todas" => Conserto_Mensagem::where('id_conserto','=','1')->count(),
            "publica" => Conserto_Mensagem::where('id_conserto','=','1')->where('tipo','=','publica')->count(),
            "privada" => Conserto_Mensagem::where('id_conserto','=','1')->where('tipo','=','privada')->count()
          ],
          "atividade" => Atividade::where('id_conserto','=','1')->count()
        ];
        

        return view('conserto/detalhes_conserto')->with(['usuarios'=> $usuarios, 'conserto' => $conserto, 'atividades' => $atividades, 'comentarios' => $comentarios, 'mensagens' => $mensagens, 'contagem' => $contagem]);
    }

    //rota: remove_conserto
    public function remove($id)
    {
        $conserto = Conserto::find($id);
        $conserto->delete();

        return redirect()->action('ConsertoController@lista');
    }
}
