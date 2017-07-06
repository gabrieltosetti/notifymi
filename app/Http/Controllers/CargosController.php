<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
