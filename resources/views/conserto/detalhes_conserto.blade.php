@extends('layouts.principal')

@section('title', 'Conserto x')

@section('content_title', 'Conserto x')

@section('breadcrumbs')
    {!! Breadcrumbs::render('detalhes_conserto') !!}
@endsection

@section('css')
    <meta name="_token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/bootstrap3-editable/bootstrap-editable.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
     <style>
        @media (min-width: 768px) {
            .dt-conserto {
                width: 90px !important;
            }
            .dd-conserto{
                margin-left: 100px !important;
            }
        }

</style> 

@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-3">
    <!-- 
        PAINEL ESQUERDO
        -->
                <!-- IMAGEM -->
                <div class="row">
                    <img alt="usuário" class="img-thumbnail img-md pull-left m-r-xs" src="/media/avatars/default.jpg">
                    <strong>Criado por </strong><a href="#" class="text-navy">{{$conserto->usuario->nome}}</a><a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Mudar usuário"><i class="fa fa-pencil m-r-sm"></i></a> <br>
                    {{$conserto->created_at->diffForHumans()}}
                </div>
                <!-- /IMAGEM -->
                <div class="row m-t-sm form-horizontal border-bottom">
                    <dl class="dl-horizontal">
                        <!-- CLIENTE -->
                        <dt class="dt-conserto">Cliente: </dt>
                        <dd class="dd-conserto m-b-sm"><a href="" class="text-navy">{{$conserto->cliente->nome}}</a><a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Mudar cliente"><i class="fa fa-pencil m-r-sm"></i></a></dd>
                        <!-- /CLIENTE -->
                        <!-- CRIADO -->
                        <dt class="dt-conserto">Criado: </dt>
                        <dd class="dd-conserto m-b-sm">{{$conserto->created_at->format('d/m/Y H:i')}}</dd>
                        <!-- /CRIADO -->
                        <dt class="dt-conserto">Atualizado: </dt>
                        <dd class="dd-conserto m-b-sm">{{$conserto->updated_at->format('d/m/Y H:i')}}</dd>
                    </dl>
                </div>
                <div class="row m-t-sm form-horizontal border-bottom">
                    <dl class="dl-horizontal">
                        <!-- STATUS -->
                        <dt class="dt-conserto">Status: </dt>
                        <dd class="dd-conserto m-b-sm"><span class="label label-warning">{{$conserto->status}}</span></dd>
                        <!-- /STATUS -->
                        <!-- PRIORIDADE -->
                        <dt class="dt-conserto">Prioridade: </dt>
                        <dd class="dd-conserto m-b-sm">{{$conserto->prioridade}}</dd>
                        <!-- /PRIORIDADE -->
                        <!-- ORÇAMENTO -->
                        <dt class="dt-conserto">Orçamento: </dt>
                        <dd class="dd-conserto m-b-sm text-info">R$ {{$conserto->orcamento}}</dd>
                        <!-- /ORÇAMENTO -->
                    </dl>
                </div>
                <div class="row m-t-sm form-horizontal border-bottom">
                    <h3>Anexos</h3>
                    <ul class="list-unstyled project-files">
                        <li><i class="fa fa-times m-r-sm"></i><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                        <li><i class="fa fa-times m-r-sm"></i><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                        <li><i class="fa fa-times m-r-sm"></i><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                    </ul>
                    <div class="text-center m-t-md m-b-xs">
                        <a href="#" class="btn btn-xs btn-primary">Adicionar Arquivo</a>
                    </div>
                </div>
                <div class="row m-t-sm form-horizontal">
                    <h3>Em cópia</h3>
                    <p>Adicione pessoas para receber notificações deste conserto.</p>
                    <select id="select-copia" data-placeholder="Adicionar pessoas..." class="chosen-select" multiple>
                    </select>
                </div>
    <!-- 
        /PAINEL ESQUERDO
        -->
            </div>
            <div class="col-sm-9">
                <div class="ibox">
                    <div class="ibox-content">
                        <!-- TITULO -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <h2 id="conserto-titulo">{{$conserto->titulo}}</h2>
                                </div>
                            </div>
                        </div>
                        <!-- /TITULO -->
                        <!-- DEFEITO -->
                        <div class="row">
                            <div class="col-lg-12">
                                <dl>
                                    <dt>Defeito <span class="dt-editar">Editar</span></dt>
                                    <dd>
                                        <p id="conserto-defeito">{{$conserto->defeito}}</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!-- /DEFEITO -->
                        <!-- DESCRIÇÃO -->
                        <div class="row">
                            <div class="col-lg-12">
                                <dl>
                                    <dt>Descrição <span class="dt-editar">Editar</span></dt>
                                    <dd>
                                        <p id="conserto-descricao">{{$conserto->observacao}}</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!-- /DESCRIÇÃO -->
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <!-- PANEL TABS -->
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab-1" data-toggle="tab">Atividades</a></li>
                                                <li class=""><a href="#tab-2" data-toggle="tab">Mensagem Pública</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /PANEL TABS -->
                                    <!-- PANEL BODY -->               
                                    <div class="panel-body">                                                    
                                        <div class="tab-content">
                                            <!-- TAB 1 -->
                                            <div class="tab-pane active" id="tab-1">
                                                <div class="col-lg-12">
                                                    <div class="panel blank-panel">
                                                        <!-- PANEL TABS -->
                                                        <div class="panel-heading">
                                                            <div class="panel-options">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active"><a href="#tab-nova_atividade" data-toggle="tab">Nova Atividade</a></li>
                                                                    <li class=""><a href="#tab-editar_atividade" data-toggle="tab">Editar Atividade</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- /PANEL TABS -->
                                                        <!-- PANEL BODY -->               
                                                        <div class="panel-body">                                                    
                                                            <div class="tab-content">
                                                                <!-- TAB NOVA ATIVIDADE -->
                                                                <div class="tab-pane active" id="tab-nova_atividade">                                                                    
                                                                    <div class="chat-form m-b">
                                                                        <img alt="usuário" class="img-circle pull-left" src="/media/avatars/default.jpg">
                                                                        <div class="media-body">
                                                                            <form role="form">
                                                                                <h4 class="m-b-sm">Gabriel Tosetti</h4>
                                                                                <div class="row">
                                                                                    <div class="col-sm-5">
                                                                                        <!--STATUS-->
                                                                                        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                                                                                            <label class="control-label" for="atividade-status">Status</label>
                                                                                            <select class="form-control" id="atividade-status" name="status">
                                                                                                    <option value="Completado">Completado</option>
                                                                                                    <option value="Em andamento">Em andamento</option>
                                                                                                    <option value="Cancelado">Cancelado</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <!--/STATUS-->
                                                                                        <!--DATA INICIO-->
                                                                                        <div class="form-group">
                                                                                            <label>Atividade Inicio</label>
                                                                                            <div class="input-group date form_datetime" data-link-field="atividade-inicio">
                                                                                                <input class="form-control" size="16" type="text" value="" >
                                                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                                                            </div>
                                                                                            <input type="hidden" id="atividade-inicio" value="" />
                                                                                        </div>
                                                                                        <!--/DATA INICIO-->
                                                                                        <!--DATA FINAL-->
                                                                                        <div class="form-group">
                                                                                            <label>Atividade Final</label>
                                                                                            <div class="input-group date form_datetime" data-link-field="atividade-final">
                                                                                                <input class="form-control" size="16" type="text" value="" >
                                                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                                                            </div>
                                                                                            <input type="hidden" id="atividade-final" value="" />
                                                                                        </div>
                                                                                        <!--/DATA FINAL-->
                                                                                    </div>
                                                                                    <div class="col-sm-7">
                                                                                        <!--TITULO-->
                                                                                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                                                                                            <label class="control-label" for="atividade-titulo">Título</label>
                                                                                            <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" id="atividade-titulo" maxlength="20">
                                                                                            <span class="help-block">{{$errors->first('titulo')}}</span>
                                                                                        </div>
                                                                                        <!--/TITULO-->
                                                                                        <div class="form-group">
                                                                                            <label class="control-label" for="atividade-mensagem">Mensagem</label>
                                                                                            <textarea id="atividade-mensagem" class="form-control" placeholder="Mensagem..."></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="text-right">
                                                                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Postar</strong></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>                                                                        
                                                                    </div>                                                                    
                                                                </div>
                                                                <!-- /TAB NOVA ATIVIDADE -->
                                                                <!-- TAB EDITAR ATIVIDADE -->
                                                                <div class="tab-pane" id="tab-editar_atividade">
                                                                </div>
                                                                <!-- /TAB EDITAR ATIVIDADE -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>Atividade</h3>
                                                

                                                <div class="lista-atividades">
                                                    @foreach ($atividades as $atividade)
                                                    <?php 
                                                        if($atividade->status == "Completado")
                                                        {
                                                            $cor = "success";
                                                        } elseif ($atividade->status == "Em andamento")
                                                        {
                                                            $cor = "warning";
                                                        } else {
                                                            $cor = "danger";
                                                        }
                                                    ?>
                                                    <!-- CARD DE ATIVIDADE SUCCESS -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="atividade {{$cor}}">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-4">
                                                                        <div class="row user-group">
                                                                            <p class="atividade-id">Atividade #{{$atividade->id}}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <div class="form-horizontal">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Status:</label>
                                                                                        <div class="col-md-8">
                                                                                            <p class="form-control-static">{{$atividade->status}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Iniciado:</label>
                                                                                        <div class="col-md-8">
                                                                                            <p class="form-control-static">{{$atividade->iniciada == null ? 'Não definida' : $atividade->iniciada->format('d/m/Y H:i')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Finalizado:</label>
                                                                                        <div class="col-md-8">
                                                                                            <p class="form-control-static">{{$atividade->finalizada == null ? 'Não definida' : $atividade->finalizada->format('d/m/Y H:i')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <small class="text-success">Título</small><br>
                                                                        <h3 class="m-b">{{$atividade->titulo}}</h3>
                                                                        <small class="text-success">Descrição</small>
                                                                        <p>{{$atividade->descricao}}</p>                                                    
                                                                    </div>
                                                                </div>
                                                                <hr class="hr-line-solid">
                                                                <div class="row">
                                                                    @foreach ($comentarios[$atividade->id] as $comentario)
                                                                    <span class="text-success">{{$comentario->created_at->format('d/m/Y H:i')}} </span>- <strong>{{$comentario->usuario->nome}}</strong> {{$comentario->status}} {{$comentario->comentario}}<br>
                                                                    @endforeach
                                                                   <!--  <span class="text-success">22/07/2017 22:05 </span>- <strong>Gabriel Tosetti</strong> criou esta atividade.<br> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- //CARD DE ATIVIDADE SUCCESS -->
                                                    @endforeach
                                                </div>                                                            
                                            </div>
                                            <!-- /TAB 1 -->
                                            <!-- TAB 2 -->
                                            <div class="tab-pane" id="tab-2">
                                                <div class="chat-form">
                                                    <img alt="usuário" class="img-circle pull-left" src="/media/avatars/default.jpg">
                                                    <div class="media-body">
                                                        <form role="form" class="conserto-chat">
                                                            <h4>Gabriel Tosetti</h4>
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Mensagem..."></textarea>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Postar</strong></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/a2.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">2h ago</small>
                                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                            <div class="well">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/a3.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">2h ago</small>
                                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                                            <small class="text-muted">2 days ago at 8:30am</small>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right text-navy">5h ago</small>
                                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                            <div class="actions">
                                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/a5.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">2h ago</small>
                                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                                            <div class="well">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">23h ago</small>
                                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">46h ago</small>
                                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                            
                                            </div>
                                            <!-- /TAB 2 -->

                                        </div> <!-- /TABS CONTENT -->                                                  
                                    </div>
                                    <!-- /PANEL BODY -->                                             
                                </div><!-- /BLANK PANEL -->
                            </div> <!-- /COL-LG-12 -->
                        </div> <!-- /ROW TABS -->
                    </div> <!-- /IBOX CONTENT -->
                </div><!-- /IBOX -->
            </div> <!-- /COL-SM-9 -->
        </div><!-- /ROW -->
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/plugins/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap3-editable/bootstrap-editable.min.js') }}"></script>
<!-- Data picker -->
    <script src="{{ asset('js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datetimepicker/locales/bootstrap-datetimepicker.pt-BR.js') }}"></script>
    <script type="text/javascript" src="bootstrap-datetimepicker.de.js" charset="UTF-8"></script>
<script>

$(document).ready(function(){
    iniciarMultiUsuario();

    $(".chosen-select").chosen({
        no_results_text: "Oops, não encontrado!"
    });

    $('[data-toggle="tooltip"]').tooltip();  

    $.fn.editable.defaults.mode = 'inline';
    $('#conserto-descricao').editable({
        type: 'textarea',
        title: 'Descrição'
    });
    $('#conserto-titulo').editable({
        type: 'text',
        title: 'Conserto'
    });
    $('#conserto-defeito').editable({
        type: 'text',
        title: 'Conserto'
    });

    $('.form_datetime').datetimepicker({
        language:  'pt-BR',
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        minuteStep: 5,
        todayHighlight: true,
        pickerPosition: 'bottom-left'
    });

});

 function iniciarMultiUsuario(){
    var nomes = <?php echo json_encode($usuarios); ?>;

    $.each(nomes, function (i, nome) {
        $('#select-copia').append($('<option>', { 
            value: nome,
            text : nome 
        }));
    });

}

</script>


@stop