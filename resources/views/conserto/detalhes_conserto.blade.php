@extends('layouts.principal')

@section('title', 'Conserto x')

@section('content_title', 'Conserto x')

@section('breadcrumbs')
    {!! Breadcrumbs::render('detalhes_conserto') !!}
@endsection

@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="ibox">
                <div class="ibox-title">
                    <h5></h5>
                    <div class="ibox-tools">
                        <a href="" class="btn btn-primary btn-xs" >Novo conserto</a>
                    </div>
                </div><!-- /IBOX TITLE -->
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-4 border-right border-size-sm">
                            <!-- IMAGEM -->
                            <div class="row">
                                <div class="col-md-12">
                                    <img alt="usuário" class="img-thumbnail img-md pull-left m-r-xs" src="/media/avatars/default.jpg">
                                    <strong>Criado por </strong><a href="#">Gabriel Tosetti</a> <br>
                                    13/07/2017 00:07
                                </div>
                            </div>
                            <!-- /IMAGEM -->
                            <div class="row m-t-md form-horizontal border-bottom">
                                <!-- CLIENTE -->
                                <label class="control-label col-md-3">Cliente: </label>
                                <p class="form-control-static col-md-9"> Matheus Luz<a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Mudar cliente"><i class="fa fa-pencil m-r-sm"></i></a></p>
                                <!-- /CLIENTE -->

                                <!-- CRIADO -->
                                <label class="control-label col-md-3">Criado: </label>
                                <p class="form-control-static col-md-9"> 13/07/2017 00:07</p>
                                <!-- /CRIADO -->
                                <!-- ATUALIZADO -->
                                <label class="control-label col-md-3">Atualizado: </label>
                                <p class="form-control-static col-md-9"> 13/07/2017 00:41</p>
                                <!-- /ATUALIZADO -->
                            </div>
                            <div class="row m-t-md form-horizontal">
                                <!-- PRIORIDADE -->
                                <div class="row">
                                    <label class="control-label col-md-3">Prioridade: </label>
                                    <div class="col-md-5">
                                        <select class="form-control" name="prioridade">
                                            <option value="1">Baixo</option>
                                            <option value="2">Médio</option>
                                            <option value="3">Alto</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /PRIORIDADE -->
                                <!-- STATUS -->
                                <div class="row m-t-sm">
                                    <label class="control-label col-md-3">Status: </label>
                                    <div class="form-group col-md-9">
                                        <span class="label label-warning">Em andamento</span>
                                    </div>
                                </div>
                                <!-- /STATUS -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /IBOX -->
        </div><!-- /ROW -->
    </div>

@endsection

@section('scripts')
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

</script>


@stop