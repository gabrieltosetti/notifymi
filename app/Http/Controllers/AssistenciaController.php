<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assistencia;
use App\Http\Requests\AssistenciaRequest;
use Illuminate\Support\Facades\Response;
use Auth;
use App\Avaliacao;


class AssistenciaController extends Controller
{

  public function lista()
  {
      $assistencias = Assistencia::all();
   foreach ($assistencias as $assistencia) {
      $assistencia->nota = number_format(Avaliacao::where('id_assistencia', '=', $assistencia->id)->avg('agilidade', 'atendimento'), 1, '.', ',');
}

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
