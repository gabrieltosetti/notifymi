@extends('layouts.principal')
@section('css')
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="row m-b">
                    <!-- IMAGEM -->
                    <div class="col-sm-2">
                        <div class="row">
                            <img class="img-thumbnail img-responsive center-block" src="/media/avatars/{{ $users ->avatar }}" style="max-height: 145px;">
                        </div>
                        <div class="row">
                            <h3 class="text-center"><strong>{{$users->name }}</strong></h3>
                        </div>
                    </div>
                    <!-- /IMAGEM -->
                    <!-- AVALIAÇÃO -->
                    <div class="col-xs-12 col-sm-4">
                        <div class="well well-sm" style="background-color: white;">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 text-center" style="padding-right: 0">
                                    <h1 class="rating-num">
                                        4.0</h1>
                                    <div class="rating">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                    </div>
                                    <div>
                                        <span class="glyphicon glyphicon-user"></span>258 total
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <!-- <div class="row rating-desc">-->
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-3 text-right no-padding">
                                                <span class="glyphicon glyphicon-star"></span>5
                                            </div>
                                            <div class="col-xs-10 col-sm-9">
                                                <div class="progress">
                                                    <div style="width: 80%;" aria-valuemin="0" aria-valuemax="100"  aria-valuenow="80" role="progressbar" class="progress-bar">
                                                        <span class="sr-only">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 5 -->
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-3 text-right no-padding">
                                                <span class="glyphicon glyphicon-star"></span>4
                                            </div>
                                            <div class="col-xs-10 col-sm-9">
                                                <div class="progress">
                                                    <div style="width: 60%;" aria-valuemin="0" aria-valuemax="100"  aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-navy-light">
                                                        <span class="sr-only">60%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 4 -->
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-3 text-right no-padding">
                                                <span class="glyphicon glyphicon-star"></span>3
                                            </div>
                                            <div class="col-xs-10 col-sm-9">
                                                <div class="progress">
                                                    <div style="width: 40%;" aria-valuemin="0" aria-valuemax="100"  aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">40%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 3 -->
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-3 text-right no-padding">
                                                <span class="glyphicon glyphicon-star"></span>2
                                            </div>
                                            <div class="col-xs-10 col-sm-9">
                                                <div class="progress">
                                                    <div style="width: 20%;" aria-valuemin="0" aria-valuemax="100"  aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">20%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 2 -->
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-3 text-right no-padding">
                                                <span class="glyphicon glyphicon-star"></span>1
                                            </div>
                                            <div class="col-xs-10 col-sm-9">
                                                <div class="progress">
                                                    <div style="width: 10%;" aria-valuemin="0" aria-valuemax="100"  aria-valuenow="10" role="progressbar" class="progress-bar progress-bar-danger">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /AVALIAÇÃO -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
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
                                                <h3 class="m-l">Informações pessoais</h3>
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
                                        <form class="form-horizontal" enctype="multipart/form-data" action="/profile" method="post">
                                            <div class="row">
                                                <h3 class="m-l">Informações pessoais</h3>
                                                <div class="col-xs-6 border-right">
                                                    <!--NOME COMPLETO-->
                                                    <div class="form-group m-b-none {{ $errors->has('nome') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="nome">Nome</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="nome" value="{{ old('nome') }}" id="nome" maxlength="50">
                                                            <span class="help-block"><?php echo $errors->first('nome'); ?></span>
                                                        </div>
                                                    </div>
                                                    <!--/NOME COMPLETO-->
                                                    <!--CARGOS-->
                                                    <div class="form-group m-b-none">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="cargo">Cargo</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <select class="form-control" id="cargo" name="id_cargo">
                                                                @foreach($cargos as $cargo)
                                                                    <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="help-block"><?php echo $errors->first('cargo'); ?></span>
                                                        </div>
                                                    </div>  
                                                    <!--/CARGOS-->                                              
                                                    <div class="form-group m-b-none">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Nível</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <p class="form-control-static">Nível aqui</p>
                                                        </div>
                                                    </div> 
                                                    <!--INPUT FOTO-->
                                                    <div class="form-group m-b-none">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label">Alterar foto</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
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
                                                        </div>
                                                    </div>
                                                    <!-- /INPUT FOTO-->
                                                </div> <!--/COL 6-->
                                                <div class="col-xs-6">
                                                    <!--CPF-->
                                                    <div class="form-group m-b-none {{ $errors->has('cpf') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="cpf">CPF</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="cpf" data-mask="999.999.999-99" value="{{ old('cpf') }}" id="cpf">
                                                            <span class="help-block"><?php echo $errors->first('cpf'); ?></span>
                                                            <span class="help-block">Exemplo: 999.999.999-99</span>
                                                        </div>
                                                    </div>
                                                    <!--/CPF-->
                                                    <!--RG-->
                                                    <div class="form-group m-b-none {{ $errors->has('rg') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="rg">RG</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="rg" data-mask="99.999.999-9" value="{{ old('rg') }}" id="rg">
                                                            <span class="help-block"><?php echo $errors->first('rg'); ?></span>
                                                            <span class="help-block">Exemplo: 99.999.999-99</span>
                                                        </div>
                                                    </div>
                                                    <!--/RG-->
                                                </div> <!--/COL 6-->
                                            </div><!--/ ROW DADOS PESSOAIS-->
                            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                            <div class="row">
                                                <h3 class="m-l">Contato</h3>
                                                <div class="col-xs-6 border-right">
                                                    <!--EMAIL-->
                                                    <div class="form-group m-b-none {{ $errors->has('email') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="email">E-mail</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" maxlength="50">
                                                            <span class="help-block"><?php echo $errors->first('email'); ?></span>
                                                        </div>
                                                    </div> 
                                                    <!--/EMAIL-->
                                                    <!--CELULAR-->
                                                    <div class="form-group m-b-none {{ $errors->has('celular') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="celular">Celular</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="celular" data-mask="(99)99999-9999" value="{{ old('celular') }}" id="celular">
                                                            <span class="help-block"><?php echo $errors->first('celular'); ?></span>
                                                            <span class="help-block">Exemplo: (99)99999-9999</span>
                                                        </div>
                                                    </div> 
                                                    <!--/CELULAR--> 
                                                </div> <!--/COL 6-->                                        
                                                <div class="col-xs-6">
                                                    <!--TELEFONE-->
                                                    <div class="form-group m-b-none {{ $errors->has('telefone') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="telefone">Telefone</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="telefone" data-mask="(99)9999-9999" value="{{ old('telefone') }}" id="telefone">
                                                            <span class="help-block"><?php echo $errors->first('telefone'); ?></span>
                                                            <span class="help-block">Exemplo: (99)9999-9999</span>
                                                        </div>
                                                    </div> 
                                                    <!--/TELEFONE-->   
                                                </div> <!--/COL 6-->
                                            </div> <!--/ROW CONTATOS-->
                            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                            <div class="row">
                                                <h3 class="m-l">Endereço</h3>
                                                <div class="col-xs-6 border-right">
                                                    <div class="form-group m-b-none {{ $errors->has('cidade') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="cidade">Cidade</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" id="cidade" maxlength="30">
                                                            <span class="help-block"><?php echo $errors->first('cidade'); ?></span>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group m-b-none {{ $errors->has('bairro') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="bairro">Bairro</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" id="bairro" maxlength="40">
                                                            <span class="help-block"><?php echo $errors->first('bairro'); ?></span>
                                                        </div>
                                                    </div>                                          
                                                    <div class="form-group m-b-none {{ $errors->has('rua') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="rua">Rua</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="text" class="form-control" name="rua" value="{{ old('rua') }}" id="rua"  maxlength="40">
                                                            <span class="help-block"><?php echo $errors->first('rua'); ?></span>
                                                        </div>
                                                    </div>                                          
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group m-b-none {{ $errors->has('numero') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="numero">Número</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <input type="number" class="form-control" name="numero" value="{{ old('numero') }}" id="numero" min="0">
                                                            <span class="help-block"><?php echo $errors->first('numero'); ?></span>
                                                        </div>
                                                    </div>    
                                                    <div class="form-group m-b-none {{ $errors->has('complemento') ? 'has-error' : ''}}">
                                                        <label class="col-sm-4 col-md-3 col-lg-2 col-xs-12 control-label" for="complemento">Compl.</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                            <textarea class="form-control"  placeholder="Opcional" name="complemento" id="complemento"  maxlength="40">{{ old('complemento') }}</textarea>
                                                            <span class="help-block"><?php echo $errors->first('complemento'); ?></span>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div><!--/ROW ENDEREÇO-->
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="pull-right btn btn-sm btn-primary" value="Salvar Alterações">
                                        </form>
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
</div>


@endsection
@section('scripts')



    </script>
<!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/custom.js') }}"></script>


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
