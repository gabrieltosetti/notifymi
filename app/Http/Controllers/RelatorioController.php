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
    $contadoremandamento = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Em Andamento')->count();
    $contadoremespera    = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Em espera')->count();
    $contadorconcluido   = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Concluido')->count();
    $contadorcancelado   = Conserto::where('id_assistencia', '=', $idassistencia)->where('status', '=', 'Cancelado')->count();
    $contadorpedidos     = $contadoremespera + $contadornovo + $contadoremandamento;
    $funcionarios        = Usuario::where('id_assistencia', '=', $idassistencia)->get();
    $pluckidfunc         = Usuario::where('id_assistencia', '=', $idassistencia)->pluck('id');






    return view('relatorio/relatorio')->with([
      "novo"        => $contadornovo,
      "emandamento" => $contadoremandamento,
      "emespera"    => $contadoremespera,
      "concluido"   => $contadorconcluido,
      "cancelado"   => $contadorcancelado,
      "funcionarios" => $funcionarios,
      "contadorpedidos"=>$contadorpedidos
    ]);
  }


}
