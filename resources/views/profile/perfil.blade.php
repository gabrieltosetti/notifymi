@extends('layouts.principal')
@section('css')
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                        <img class="img-thumbnail img-responsive center-block" src="/media/avatars/{{ $users ->avatar }}">
                    </div>
                    <div class="row">
                        <h3 class="text-center"><strong>{{$users->name }}</strong></h3>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-Geral"><i class="fa fa-user-o"></i>Geral</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-editar"><i class="fa fa-edit"></i>Editar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-Geral" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="form-horizontal">
                                        <div class="row">
                                            <h3 class="m-l" class="m-l">Informações pessoais</h3>
                                            <div class="col-xs-6 border-right">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Nome</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">{{$users->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Cargo</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Cargo aqui</p>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Nível</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Nível aqui</p>
                                                    </div>
                                                </div>                                                                                             
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">CPF</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">111.111.111-11</p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">RG</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">111.111.111-9</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                        <div class="row">
                                            <h3 class="m-l">Contato</h3>
                                            <div class="col-xs-6 border-right">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">E-mail</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">E-mail aqui</p>
                                                    </div>
                                                </div> 
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Celular</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Celular aqui</p>
                                                    </div>
                                                </div>  
                                            </div>                                         
                                            <div class="col-xs-6">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Telefone</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Telefone aqui</p>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                        <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                        <div class="row">
                                            <h3 class="m-l">Endereço</h3>
                                            <div class="col-xs-6 border-right">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Cidade</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Cidade aqui</p>
                                                    </div>
                                                </div>  
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Bairro</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Bairro aqui</p>
                                                    </div>
                                                </div>                                          
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Rua</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Rua aqui</p>
                                                    </div>
                                                </div>                                          
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Número</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Número aqui</p>
                                                    </div>
                                                </div>    
                                                <div class="form-group m-b-none">
                                                    <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Compl.</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <p class="form-control-static">Complemento aqui</p>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div> <!--/FORM HORIZONTAL-->
                                </div> <!--/PANEL BODY-->
                            </div> <!--/TAB GERAL-->
                            <div id="tab-editar" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <form class="form-horizontal" enctype="multipart/form-data" action="/profile" method="post">
                                            <label>Alterar Foto</label>
                                            <!--INPUT FOTO-->
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
                                            <!-- /INPUT FOTO-->
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="pull-right btn btn-sm btn-primary " >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/TAB CONTAINER-->
                </div>
                <!--/COL-->
            </div>
            <!--/ROW-->
        </div><!--/IBOX CONTENT-->
    </div>
</div>


@endsection
@section('scripts')



    </script>
<!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="js/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="js/plugins/sweetalert2/custom.js"></script>


<!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            console.log("{{$users}}");

        });


    </script>

@stop
