<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
        return view('funcionario/lista_funcionario');
    }

    public function novo()
    {
        return view('funcionario/novo_funcionario');
    }
}
