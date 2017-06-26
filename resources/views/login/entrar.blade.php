@extends('layouts.loginlayout')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <img src="{{ asset('img/logoh.png') }}" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
          </div>

          <div class="panel-body">
            <form role="form" action="{{ route('login') }}" method="post">
                <fieldset>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" placeholder="Usuário ou E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Lembrar de mim
                        </label>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
          <!--                                <a href="perfil.html" class="btn btn-info btn-social btn-block">
                        <i class="fa fa-sign-in"></i> Login
                    </a>-->

                    <button type="submit" class="btn btn-info btn-social btn-block"><i class="fa fa-sign-in"></i> Login</button>

                    <a href="/register" class="btn btn-success btn-social btn-block">
                        <i class="fa fa-edit"></i> Cadastrar
                    </a>

                </fieldset>

            </form>


        </div>
      </div>
    </div>
  </div>
@endsection
