<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

  public function login()
  {
    return view('login/entrar');
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
