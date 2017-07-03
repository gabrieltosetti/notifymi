<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClienteController extends Controller
{

  public function login()
  {
    return view('login/entrarcliente');
  }

  public function loginnovo()
  {
      return view('login/entrar_novo');
  }

}
