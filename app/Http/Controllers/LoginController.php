<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

  public function loginadmin()
  {
    return view('login/entraradmin');
  }
  public function loginassistencia()
  {
    return view('login/entrarassistencia');
  }
  public function logincliente()
  {
    return view('login/entrarcliente');
  }

  public function cadastro()
  {
      return view('login/cadastro_login');
  }
  public function loginnovo()
  {
      return view('login/entrar_novo');
  }

}
