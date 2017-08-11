<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Response;
use App\Usuario;
use App\Cargo;
use App\Conserto;
use App\Cliente;
use Auth;

class RelatorioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function relatorio()
  {
    $idassistencia       = Auth::user()->id_assistencia;
    $contadornovo        = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Novo')->count();
    $contadoremandamento = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Em andamento')->count();
    $contadoremespera    = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Em espera')->count();
    $contadorconcluido   = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'concluido')->count();
    $contadorcancelado   = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Cancelado')->count();
    $contadorpedidos     = $contadoremespera + $contadornovo + $contadoremandamento +  $contadorconcluido;
    $funcionarios        = Usuario::where('id_assistencia', '=', $idassistencia)->get();


     foreach ($funcionarios as $funcionario) {

       $funcionario->concluido   = Conserto::where('id_usuario', '=', $funcionario->id)->where('status','=', 'concluido')->count();
       $funcionario->emandamento = Conserto::where('id_usuario', '=', $funcionario->id)->where('status','=', 'Em andamento')->count();
       $funcionario->emespera    = Conserto::where('id_usuario', '=', $funcionario->id)->where('status','=', 'Em espera')->count();
     }





    return view('relatorio/relatorio')->with([
      "novo"        => $contadornovo,
      "emandamento" => $contadoremandamento,
      "emespera"    => $contadoremespera,
      "concluido"   => $contadorconcluido,
      "cancelado"   => $contadorcancelado,
      "funcionarios" => $funcionarios,
      "contadorpedidos"=>$contadorpedidos,

    ]);
  }


}
