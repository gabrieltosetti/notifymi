<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function lista()
    {
        return view('cliente/lista_cliente');
    }

    public function novo()
    {
        return view('cliente/novo_cliente');
    }
}
