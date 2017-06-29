<?php

namespace App\Http\Controllers;
use App\Permissoes;
use Illuminate\Http\Request;
use App\Http\Requests\PermissoesRequest;
use App\Usuario;
use App\Cargo;

class PermissoesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
          $permissoes = Permissoes::all();


        return view('permissoes/lista_permissoes')->with('lista_permissoes', $permissoes);
    }

    public function novo()
    {
        return view('permissoes/novo_permissoes');
    }
}
