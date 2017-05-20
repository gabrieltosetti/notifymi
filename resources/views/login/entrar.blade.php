@extends('layouts.loginlayout')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <img src="{{ asset('img/logoh.png') }}" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
          </div>
          <div class="panel-body">
            @if(isset($erro))
            <div class="alert alert-danger" role="alert">Dados inválidos !</div>
            @endif
            <form role="form" action="/notifymi/login" method="post">
              <fieldset>
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
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

              <button type="submit" class="btn btn-info btn-social btn-block"><i class="fa fa-sign-in"></i> Login</button>

              <a href="{{ route('cadastro') }}" class="btn btn-success btn-social btn-block">
                <i class="fa fa-edit"></i> Cadastrar
              </a>

            </fieldset>

          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
