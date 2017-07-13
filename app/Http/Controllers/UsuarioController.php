<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Cargo;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Response;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usuariohome()
    {
        return view('home/usuariohome');
    }

    public function lista()
    {
        $usuarios = Usuario::all();

        return view('usuario/lista_usuario')->with('usuarios', $usuarios);
        /*return view('usuario/lista_usuario');*/
    }

    public function novo()
    {
        return view('usuario/novo_usuario')->with('cargos', Cargo::all());
    }

    //rota: novo_usuario_post
    public function adiciona(UsuarioRequest $request)
    {

        request()->file('foto')->store('perfil');
        Usuario::create($request->all());

        return redirect('/usuarios')->withInput();
    }

    //rota: detalhes_usuario
    public function detalhes($id)
    {
        $usuario = Usuario::find($id);
        $usuario->{"cargo"} = $usuario->cargo->id;

        return Response::json($usuario);
    }

    //rota: remove_usuario
    public function remove($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return;
    }
}
