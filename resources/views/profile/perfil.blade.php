@extends('layouts.principal')
@section('css')
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/plugins/dropzone/basic.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/plugins/codemirror/codemirror.css') }}" rel="stylesheet">-->
@stop

@section('content')
<div class="container">
    <div class="ibox-content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <div align="center" >
          <img class="img-circle" src="/media/avatars/{{ $users ->avatar }}" style="padding-bottom:20px; width:350px; height:350px" >
        </div>

        </div>
        <div class="col-xs-10 col-sm-6 b-r">
        <b>Nome:</b>  {{$users->email }}

        </div>
        <div class="col-xs-11 col-sm-6">
        <b>Email:</b>  {{$users->email }}

        </div>
        <div class="col-xs-12 col-sm-6 b-r">
        <b>Telefone:</b>  {{$users->email }}

        </div>
        <div class="col-xs-13 col-sm-6">
        <b>Cargo:</b>  {{$users->email }}

        </div>
        <div class="col-xs-14 col-sm-6 b-r">
            <b>Celular:</b>  {{$users->email }}

        </div>

                <div class="col-xs-14 col-sm-6 b-r">
                  <form enctype="multipart/form-data" action="/profile" method="post">
                    <label>Alterar Perfil</label>
                   <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                      <div class="form-control" data-trigger="fileinput">
                          <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                      </div>
                      <span class="input-group-addon btn btn-default btn-file">
                          <span class="fileinput-new">Selecionar Arquivo</span>
                          <span class="fileinput-exists">Alterar</span>
                          <input type="file" name="avatar">
                      </span>
                      <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                  </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="pull-right btn btn-sm btn-primary ">
                        </form>



                  </div>






  </div>

    </div>
</div>


@endsection
@section('scripts')
<!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

<!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

        });
    </script>

@stop
