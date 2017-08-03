<?php

namespace App\Http\Controllers\Auth;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\BemVindo;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
  * Where to redirect users after registration.
  *
  * @var string
  */
  protected $redirectTo = '/home';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @return \Illuminate\Contracts\Validation\Validator
  */

  public function showRegisterForm(){
    return view ('auth.register');
  }
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
      'RG' => 'required|min:9|max:12',
      'CPF' => 'required|min:11|max:14',
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return User
  */

  protected function create(array $data)
  {
    \Mail::to($data['email'])->send(new BemVindo);

    return Cliente::create([
      'nome' => $data['name'],
      'email' => $data['email'],
      'rg' => $data['RG'],
      'cpf' => $data['CPF'],
      'senha' => bcrypt($data['password']),
    ]);
  }
  public function cadastro(Request $request){

    //Validar dados
    $this->validator($request->all())->validate();

    //criar usuarios
    $usuario = $this->create($request->all());

    //Authenticates seller
    $this->guard()->login($usuario);

    //Redirects sellers
    return redirect()->route('usuariohome');

  }


}
