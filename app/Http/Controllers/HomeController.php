<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  // public function __construct()
  // {
  // $this->middleware('auth');
  // }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function index()
  {
    return view('home/index');
  }

  public function login()
  {
    return view ('auth/login');
  }

  public function logout()
  {

    Auth::guard('usuario')->logout();
    Auth::guard('admin')->logout();

    return redirect('/');
  }
}
