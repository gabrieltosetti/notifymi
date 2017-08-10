<?php

namespace App\Http\Controllers;

use App\Conserto;
use App\Usuario;
use App\Cliente;
use App\Atividade;
use App\Atividade_mensagem;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Auth;

class Atividade_mensagemController extends Controller
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
        $mensagem = Atividade_mensagem::create($request->all());

        $resposta = [
            'mensagem' => $mensagem->mensagem,
            'tipo' => $mensagem->tipo,
            'usuario' => [
                'nome' => $mensagem->usuario->nome,
                'avatar' => $mensagem->usuario->avatar
            ],
            'criada' => $mensagem->created_at->toDateTimeString()
        ];
        return Response::json($resposta);
    }
}
