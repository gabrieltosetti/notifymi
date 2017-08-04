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
        $data_finalizada = $atividade->finalizada == null ? "Não definido" : $atividade->finalizada;
                
        if($request->status != $atividade->status)
        {
            $texto .= $texto == null ? "alterou o status de <strong>".$atividade->status."</strong> para <strong>".$request->status."</strong>" : ", o status de <strong>"+$atividade->status+"</strong> para <strong>"+$request->status+"</strong>";
            $atividade->status = $request->status;
        } 
        if($request->iniciada != $atividade->iniciada)
        {
            $texto .= $texto == null ? "alterou a data inicio de <strong>".$atividade->iniciada."</strong> para <strong>".$request->iniciada."</strong>" : ", a data inicio de <strong>".$atividade->iniciada."</strong> para <strong>".$request->iniciada."</strong>";
            $atividade->iniciada = $request->iniciada;
        } 
        if($request->finalizada != $data_finalizada)
        {
            $texto .= $texto == null ? "alterou a data final de <strong>".$data_finalizada."</strong> para <strong>".$request->finalizada."</strong>" : ", a data final de <strong>".$data_finalizada."</strong> para <strong>".$request->finalizada."</strong>";
            $atividade->finalizada = $request->finalizada;
        } 
        if($request->titulo != $atividade->titulo)
        {
            $texto .= $texto == null ? "alterou o título de <strong>".$atividade->titulo."</strong> para <strong>".$request->titulo."</strong>" : ", o título de <strong>".$atividade->titulo."</strong> para <strong>".$request->titulo."</strong>";
            $atividade->titulo = $request->titulo;
        } 
        if($request->descricao != $atividade->descricao)
        {
            $texto .= $texto == null ? "alterou a descrição de <strong>".$atividade->descricao."</strong> para <strong>".$request->descricao."</strong>" : ", a descrição de <strong>".$atividade->descricao."</strong> para <strong>".$request->descricao."</strong>";
            $atividade->descricao = $request->descricao;
        }   

        $comentario = [
            'status' => $texto == null ? "" : $texto.'.',
            'comentario' => $request->comentario == null ? null : " Comentário: ".$request->comentario,
            'id_usuario' => Auth::user()->id,
            'id_atividade' => $atividade->id,
            'updated_at' => Carbon::now()
        ];

        $atividade_comentario = Atividade_comentario::create($comentario);
        $atividade->save();

        return Response::json(["resultado" => $request->iniciada." e a atividade ".$atividade->iniciada]);
    }
}
