<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Notify-Mi</title>

  <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">


  <!-- Social Buttons CSS -->
    <link href="{{ asset('css/plugins/bootstrapSocial/bootstrap-social.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel-body">

        </div>
        <div class="login-panel panel panel-default">
          <div class="panel-body">
              <img src="{{ asset('img/logocad.png')}}" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
              <!--<div class="panel-heading">Registrar</div>!-->
            <form class="form-horizontal" role="form" method="POST" action="{{ route('cadastro.submit') }}">
              {{ csrf_field() }}


              <!-- NOME -->

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- RG -->

              <div class="form-group{{ $errors->has('RG') ? ' has-error' : '' }}">
                <label for="RG" class="col-md-4 control-label">RG</label>

                <div class="col-md-6">
                  <input id="RG" type="text" class="form-control" name="RG" value="{{ old('RG') }}" required autofocus>

                  @if ($errors->has('RG'))
                  <span class="help-block">
                    <strong>{{ $errors->first('RG') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- CPF -->

              <div class="form-group{{ $errors->has('CPF') ? ' has-error' : '' }}">
                <label for="CPF" class="col-md-4 control-label">CPF</label>

                <div class="col-md-6">
                  <input id="CPF" type="text" class="form-control" name="CPF" value="{{ old('CPF') }}" required autofocus>

                  @if ($errors->has('CPF'))
                  <span class="help-block">
                    <strong>{{ $errors->first('CPF') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- EMAIL -->

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Endereço de email</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <!-- SENHA -->

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <!-- CONFIRMAR SENHA -->

              <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>

              <div class="col-md-6 col-md-offset-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-success">
                    Registrar
                  </button>


                    <a class="btn btn-danger" href="{{ route('entrarusuario') }}">
                      Cancelar
                    </a>

                </div>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

    </body>
</html>
