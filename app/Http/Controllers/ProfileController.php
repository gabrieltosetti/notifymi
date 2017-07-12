<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\Cargo;



class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function perfil(){
    return view('profile/perfil', ['users'=> Auth::user(), 'cargos' => Cargo::all()]);
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
