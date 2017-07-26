<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assistencia;
use App\Http\Requests\AssistenciaRequest;
use Illuminate\Support\Facades\Response;
use Auth;

class AssistenciaController extends Controller
{

  public function lista()
  {
      $assistencias = Assistencia::all();

      return view('assistencias/cadastradas')->with('assistencias', $assistencias);
  }
  public function detalhes($id)
  {
      $assistencia = Assistencia::find($id);
      

      return Response::json($assistencia);
  }

  //rota: remove_assistencia
  public function remove($id)
  {
      $assistencia = Assistencia::find($id);
      $assistencia->delete();

      return;
  }
}
