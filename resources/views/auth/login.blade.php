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
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <img src="{{ asset('img/logolog.png')}}" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
                    </div>
                    <div class="panel-body">
                    @if(isset($erro))
                            <div class="alert alert-danger" role="alert">Dados inválidos !</div>
                        @endif
                        <form role="form" action="{{ route('entrarusuario.submit') }}" method="post">
                            <fieldset>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
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

                                <a href="{{ route('cadastro') }}" class="btn btn-success btn-social btn-block">
                                    <i class="fa fa-edit"></i> Cadastrar
                                </a>

                            </fieldset>

                        </form>

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
