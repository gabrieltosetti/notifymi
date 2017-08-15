<?php

namespace App\Http\Controllers;

use App\Conserto;
use App\Usuario;
use App\Cliente;
use App\Atividade;
use App\Conserto_Mensagem;
use Illuminate\Http\Request;
use App\Http\Requests\ConsertoRequest;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Auth;

class Conserto_MensagemController extends Controller
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
        $mensagem = Conserto_Mensagem::create($request->all());

         $resposta = [
            'mensagem' => $mensagem->mensagem,
            'tipo' => $mensagem->tipo,
            'usuario' => [
                'id'  =>  $mensagem->usuario->id,
                'nome' => $mensagem->usuario->nome,
                'avatar' => $mensagem->usuario->avatar
            ],
            'criada' => $mensagem->created_at->formatLocalized('%A, %d/%M/%Y %H:%M'),
            'criada_diff' => $mensagem->created_at->diffForHumans()
        ]; 
        return Response::json($resposta);
    }
}
