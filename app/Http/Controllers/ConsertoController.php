<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsertoController extends Controller
{
    public function lista()
    {
        return view('conserto/lista_conserto');
    }

    public function novo()
    {
        return view('conserto/novo_conserto');
    }
}
