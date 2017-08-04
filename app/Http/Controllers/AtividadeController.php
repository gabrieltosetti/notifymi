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

class AtividadeController extends Controller
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


    public function nova(Request $request)
    {
        $atividade = Atividade::create($request->all());

        $comentario = [
            'status' => 'iniciou esta atividade.',
            'comentario' => null,
            'id_usuario' => Auth::user()->id,
            'id_atividade' => $atividade->id,
            'created_at' => $atividade->iniciada
        ];

        $atividade_comentario = Atividade_comentario::create($comentario);
        $card = [
            'id' => $atividade->id,
            'status' => $atividade->status,
            'iniciada' => $atividade->iniciada->format('d/m/Y H:i'),
            'finalizada' => $atividade->finalizada == null ? "Não definido" : $atividade->finalizada->format('d/m/Y H:i'),
            'titulo' => $atividade->titulo,
            'descricao' => $atividade->descricao,
            'comentario_criado' => $atividade_comentario->created_at->format('d/m/Y H:i'),
            'comentario_usuario' => $atividade_comentario->usuario->nome,
            'comentario_status' => $atividade_comentario->status

        ];
        return Response::json($card);
    }

    public function editar(Request $request)
    {
        $atividade = Atividade::find($request->id);
        $texto = null;
                
        if($request->status != $atividade->status)
        {
            $texto == null ? "alter"
        } 
        if($request->iniciada != $atividade->iniciada)
        {
            return Response::json(["resultado" => "iniciada diferente"]);
        } 
        if($request->finalizada != $atividade->finalizada)
        {
            return Response::json(["resultado" => "finalizada diferente"]);
        } 
        if($request->titulo != $atividade->titulo)
        {
            return Response::json(["resultado" => "titulo diferente"]);
        } 
        if($request->descricao != $atividade->descricao)
        {
            return Response::json(["resultado" => "descricao diferente"]);
        } 

/*         $comentario = [
            'status' => 'iniciou esta atividade.',
            'comentario' => null,
            'id_usuario' => Auth::user()->id,
            'id_atividade' => $atividade->id,
            'created_at' => $atividade->iniciada
        ];

        $atividade_comentario = Atividade_comentario::create($comentario); */

        return Response::json(["resultado" => "nada"]);
    }
}
