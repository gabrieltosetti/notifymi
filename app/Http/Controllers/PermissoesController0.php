<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissoesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
        return view('conserto/lista_conserto');
    }

    public function novo()
    {
        return view('conserto/novo_conserto');
    }
}
