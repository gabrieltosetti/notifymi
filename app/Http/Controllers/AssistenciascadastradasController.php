<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistenciascadastradasController extends Controller
{
  public function lista()
  {
    $assistencias = Assistencias::all();

      return view('assistencias/cadastradas')->with('assistencias', $assistencias);
  }
}
