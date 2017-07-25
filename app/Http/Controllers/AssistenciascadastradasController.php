<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assistencia;
use App\Http\Requests\AssistenciaRequest;
use Illuminate\Support\Facades\Response;
use Auth;

class AssistenciascadastradasController extends Controller
{

  public function lista()
  {
      $assistencias = Assistencia::all();

      return view('assistencias/cadastradas')->with('assistencias', $assistencias);
  }
}
