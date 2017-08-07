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
            'status' => '<span class="text-success">iniciou</span> esta atividade.',
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
        $resultado = 
        [
            'atividade' => [
                'id' => $request->id,
                'cor' => null,
                'status' => null,
                'iniciada' => null,
                'finalizada' => null,
                'titulo' => null,
                'descricao' => null
            ],
            'comentario' => [
                'usuario' => null,
                'status' => null,
                'comentario' => null,
                'created_at' => null
            ]
        ];
                
        if($request->status != $atividade->status)
        {
            $texto .= $texto == null ? "alterou o <span class='text-success'>status</span> de <strong>".$atividade->status."</strong> para <strong>".$request->status."</strong>" : ", o <span class='text-success'>status</span> de <strong>"+$atividade->status+"</strong> para <strong>"+$request->status+"</strong>";
            $atividade->status = $request->status;
            switch($request->status)
            {
                case "Completado":
                    $resultado['atividade']['cor'] = "success";
                    $resultado['atividade']['status'] = "Completado";
                    break;
                case "Em andamento":
                    $resultado['atividade']['cor'] = "warning";
                    $resultado['atividade']['status'] = "Em andamento";
                    break;
                case "Cancelado":
                    $resultado['atividade']['cor'] = "danger";
                    $resultado['atividade']['status'] = "Cancelado";
                    break;
            }
        } 
        if($request->iniciada != $atividade->iniciada)
        {
            $texto .= $texto == null ? "alterou a <span class='text-success'>data inicio</span> de <strong>".$atividade->iniciada."</strong> para <strong>".$request->iniciada."</strong>" : ", a <span class='text-success'>data inicio</span> de <strong>".$atividade->iniciada."</strong> para <strong>".$request->iniciada."</strong>";
            $atividade->iniciada = $request->iniciada;
            $resultado['atividade']['iniciada'] = $atividade->iniciada->format('d/m/Y H:i');
        } 
        if($request->finalizada != $data_finalizada)
        {
            $texto .= $texto == null ? "alterou a <span class='text-success'>data final</span> de <strong>".$data_finalizada."</strong> para <strong>".$request->finalizada."</strong>" : ", a <span class='text-success'>data final</span> de <strong>".$data_finalizada."</strong> para <strong>".$request->finalizada."</strong>";
            $atividade->finalizada = $request->finalizada;
            $resultado['atividade']['finalizada'] = $atividade->finalizada->format('d/m/Y H:i');
        } 
        if($request->titulo != $atividade->titulo)
        {
            $texto .= $texto == null ? "alterou o <span class='text-success'>título</span> de <strong>".$atividade->titulo."</strong> para <strong>".$request->titulo."</strong>" : ", o <span class='text-success'>título</span> de <strong>".$atividade->titulo."</strong> para <strong>".$request->titulo."</strong>";
            $atividade->titulo = $request->titulo;
            $resultado['atividade']['titulo'] = $atividade->titulo;
        } 
        if($request->descricao != $atividade->descricao)
        {
            $texto .= $texto == null ? "alterou a <span class='text-success'>descrição</span> de <strong>".$atividade->descricao."</strong> para <strong>".$request->descricao."</strong>" : ", a <span class='text-success'>descrição</span> de <strong>".$atividade->descricao."</strong> para <strong>".$request->descricao."</strong>";
            $atividade->descricao = $request->descricao;
            $resultado['atividade']['descricao'] = $atividade->descricao;
        }   

        $comentario = [
            'status' => $texto == null ? "" : $texto.'.',
            'comentario' => $request->comentario == null ? null : " <span class='text-success'>Comentário</span>: ".$request->comentario,
            'id_usuario' => Auth::user()->id,
            'id_atividade' => $atividade->id,
            'updated_at' => Carbon::now()
        ];

        $atividade_comentario = Atividade_comentario::create($comentario);
        $atividade->save();

        $resultado['comentario']['usuario'] = $atividade_comentario->usuario->nome;
        $resultado['comentario']['status'] = $atividade_comentario->status;
        $resultado['comentario']['comentario'] = $atividade_comentario->comentario;
        $resultado['comentario']['created_at'] = $atividade_comentario->created_at->format('d/m/Y H:i');
        return Response::json($resultado);
    }
}
