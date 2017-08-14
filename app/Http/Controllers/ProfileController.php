<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\Cargo;
use App\Avaliacao;




class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function perfil(){
    $idusuario =  Auth::user()->id;
    $avaliacao = new Avaliacao;
    $avaliacao->notaagilidade = Avaliacao::where('id_usuario', '=', $idusuario)->avg('agilidade');
    $avaliacao->quantidadeagilidade = Avaliacao::where('id_usuario', '=', $idusuario)->count('agilidade');
    $avaliacao->notaatendimento = Avaliacao::where('id_usuario', '=', $idusuario)->avg('atendimento');
    $avaliacao->quantidadeatendimento = Avaliacao::where('id_usuario', '=', $idusuario)->avg('atendimento');
    $avaliacao->totalcount = Avaliacao::where('id_usuario', '=', $idusuario)->count();


    $avaliacao->zero = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '>','0' )->where('nota', '<', '1')->count();
    $avaliacao->um = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '>', '1')->where('nota', '<', '2')->count();
    $avaliacao->dois = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '>', '2')->where('nota', '<', '3')->count();
    $avaliacao->tres = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '>', '3')->where('nota', '<', '4')->count();
    $avaliacao->quatro = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '>', '4')->where('nota', '<', '5')->count();
    $avaliacao->cinco = Avaliacao::where('id_usuario', '=', $idusuario)->where('nota', '=', '5')->count();

    if($avaliacao->totalcount == '0') {
      $avaliacao->totalmedia = '0';
    }

    else {
      $avaliacao->totalmedia = number_format(Avaliacao::where('id_usuario', '=', $idusuario)->avg('nota'), 1);

      $avaliacao->cincopcnt = $avaliacao->cinco * 100 / $avaliacao->totalcount;
      $avaliacao->quatropcnt = $avaliacao->quatro * 100 / $avaliacao->totalcount;
      $avaliacao->trespcnt = $avaliacao->tres * 100 / $avaliacao->totalcount;
      $avaliacao->doispcnt = $avaliacao->dois * 100 / $avaliacao->totalcount;
      $avaliacao->umpcnt = $avaliacao->um * 100 / $avaliacao->totalcount;
      $avaliacao->zeropcnt = $avaliacao->zero * 100 / $avaliacao->totalcount;
    }




    return view('profile/perfil', ['users'=> Auth::user(), 'cargos' => Cargo::all(),'avaliacao' => $avaliacao ]);
  }

  public function mudaravatar(Request $request){
    $user = Auth::user();
    $file = public_path('/media/avatars/' . $user->avatar);
    $avatar = $user->avatar;

    if($avatar!==('default.jpg')){
      unlink($file);
    }

    if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();

      Image::make($avatar) -> resize(300, 300)->save(public_path('/media/avatars/' . $filename ) );
      $user->avatar = $filename;
      $user->save();
    }
    return view('profile/perfil', array('users'=> Auth::user()));
  }
}
