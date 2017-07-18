<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller

{

    public function __construct(){
      $this->middleware('guest:usuario', ['except' => ['logout']]);

    }

    public function showLoginForm(){
      return view ('auth.login');
    }

    public function login(Request $request){
      // Validate the form data

      $this->Validate($request,[
        'email' => 'required|email',
        'password' => 'required'
      ]);

      //Attempt to log the user in

      if (Auth::guard('usuario')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        //if successful, then redirect to their intended location

          return redirect()->intended(route('usuariohome'));
      }
      //if not, redirect back to login
      else{
        return redirect()->back()->withInput($request->only('email', 'remember'));
      }
    }

    public function logout()
    {
        Auth::guard('usuario')->logout();

        return redirect('/');
    }
  }











// ------------- METODO ANTIGO -------------------


// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */
//
//     use AuthenticatesUsers;
//
//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';
//
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }
// }
