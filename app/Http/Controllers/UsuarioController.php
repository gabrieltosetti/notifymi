<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
        $usuarios = Usuario::all();

        return view('Usuario/lista_usuario')->with('usuarios', $usuarios);
        /*return view('usuario/lista_usuario');*/
    }

    public function novo()
    {
        return view('usuario/novo_usuario');
    }

    //rota: novo_usuario_post
    public function adiciona(UsuarioRequest $request)
    {
        Usuario::create($request->all());

        return redirect('/usuarios')->withInput();
    }

    //rota: detalhes_usuario
    public function detalhes($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario/detalhes_usuario')->with('usuario', $usuario);
    }

    //rota: remove_usuario
    public function remove($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->action('UsuarioController@lista');
    }
}
