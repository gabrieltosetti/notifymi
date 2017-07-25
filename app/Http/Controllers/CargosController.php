<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CargosController extends Controller
{
  public function __construct()
  {
    if (Auth::guard()->check())
      $auth = 'auth';
    else
      $auth = 'auth:admin';

      $this->middleware($auth);
  }

    public function listacargos()
    {
        return view('cargos/lista_cargos');
    }

    public function novocargo()
    {
        return view('cargos/novo_cargos');
    }
}
