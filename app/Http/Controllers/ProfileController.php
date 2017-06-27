<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function perfil()
    {
      return view('profile/perfil', array('users'=> Auth::user()));
    }
}
