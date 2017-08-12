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
    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Ladda style -->
    <link href="{{ asset('css/plugins/ladda/ladda-themeless.min.css') }}" rel="stylesheet">

    <meta name="_token" content="{{ csrf_token() }}" />
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
    <!-- PAINEL ESQUERDO -->
                <!-- IMAGEM -->
                <div class="row">
                    <img alt="usuário" class="img-thumbnail img-md pull-left m-r-xs" src="/media/avatars/{{$conserto->cliente->avatar}}">
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
    <!-- /PAINEL ESQUERDO -->
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
                        <!-- DETALHES -->
                        <div class="row">
                            <div class="col-lg-12">
                                <dl>
                                    <dt>Detalhes <span class="dt-editar">Editar</span></dt>
                                    <dd>
                                        <p id="conserto-descricao">{{$conserto->observacao}}</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!-- /DETALHES -->
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <!-- PANEL TABS -->
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class=""><a href="#tab-1" data-toggle="tab">Atividades</a></li>
                                                <li class="active"><a href="#tab-2" data-toggle="tab">Mensagens</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /PANEL TABS -->
                                    <!-- PANEL BODY -->
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <!-- TAB 1 -->
                                            <div class="tab-pane" id="tab-1">
                                                <div class="col-lg-12">        
                                                    <div class="tab" role="tabpanel">
                                                        <!-- NOME DAS TABS -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a class="info" href="#tab-nova_atividade" role="tab" data-toggle="tab">Nova Atividade</a></li>
                                                            <li role="presentation"><a class="warning" href="#tab-editar_atividade" role="tab" data-toggle="tab">Editar Atividade</a></li>
                                                        </ul>
                                                        <!-- /NOME DAS TABS -->
                                                        <!-- CONTEUDO DAS TABS -->
                                                        <div class="tab-content">
                                                            <!-- TAB NOVA ATIVIDADE -->                                                                            
                                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-nova_atividade">
                                                                <div class="chat-form m-b">
                                                                    <img alt="usuário" class="img-circle pull-left" src="/media/avatars/{!!Auth::user()->avatar!!}">
                                                                    <div class="media-body">
                                                                        <form role="form" method="POST" id="atividade-nova">
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
                                                                                        <label>Atividade Final <small class="text-success">opcional</small></label>
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
                                                                                        <label class="control-label" for="atividade-descricao">Descrição</label>
                                                                                        <textarea id="atividade-descricao" rows="5" class="form-control" placeholder="descrição..."></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-right">
                                                                                <button id="btn-criar" type="submit" class="ladda-button btn btn-sm btn-primary m-t-n-xs" data-style="expand-right"><span class="ladda-label">Criar</span><span class="ladda-spinner"></span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /TAB NOVA ATIVIDADE --> 
                                                            <!-- TAB EDITAR ATIVIDADE -->                                                                            
                                                            <div role="tabpanel" class="tab-pane fade in" id="tab-editar_atividade">
                                                                <p>Para editar uma atividade, escolha uma da lista e faça as alterações necessárias.</p>
                                                                <!--ESCOLHA-->
                                                                <div class="form-group">
                                                                    <label class="control-label" for="atividade-escolha">Atividade:</label>
                                                                    <select class="form-control" id="atividade-escolha" name="atividade-escolha">
                                                                        @foreach ($atividades as $atividade)
                                                                            <option value="{{$atividade->id}}">#{{$atividade->id}} - {{$atividade->titulo}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <!--/ESCOLHA-->
                                                                <div class="chat-form m-b">
                                                                    <img alt="usuário" class="img-circle pull-left" src="/media/avatars/{!!Auth::user()->avatar!!}">
                                                                    <div class="media-body">
                                                                        <form role="form" method="POST" id="atividade-editar">
                                                                            <h4 class="m-b-sm">Gabriel Tosetti</h4>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <!--STATUS-->
                                                                                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                                                                                        <label class="control-label" for="escolha-status">Status</label>
                                                                                        <select class="form-control" id="escolha-status" name="status">
                                                                                                <option value="Completado">Completado</option>
                                                                                                <option value="Em andamento">Em andamento</option>
                                                                                                <option value="Cancelado">Cancelado</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <!--/STATUS-->
                                                                                    <!--DATA INICIO-->
                                                                                    <div class="form-group">
                                                                                        <label>Atividade Inicio</label>
                                                                                        <div class="input-group date form_datetime" data-link-field="escolha-inicio">
                                                                                            <input class="form-control" size="16" type="text" value="" escolha="data-inicio">
                                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                                                        </div>
                                                                                        <input type="hidden" id="escolha-inicio" value="" />
                                                                                    </div>
                                                                                    <!--/DATA INICIO-->
                                                                                    <!--DATA FINAL-->
                                                                                    <div class="form-group">
                                                                                        <label>Atividade Final <small class="text-success">opcional</small></label>
                                                                                        <div class="input-group date form_datetime" data-link-field="escolha-final">
                                                                                            <input class="form-control" size="16" type="text" value="" escolha="data-final">
                                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                                                        </div>
                                                                                        <input type="hidden" id="escolha-final" value="" />
                                                                                    </div>
                                                                                    <!--/DATA FINAL-->
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <!--TITULO-->
                                                                                    <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                                                                                        <label class="control-label" for="escolha-titulo">Título</label>
                                                                                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" id="escolha-titulo" maxlength="20">
                                                                                        <span class="help-block">{{$errors->first('titulo')}}</span>
                                                                                    </div>
                                                                                    <!--/TITULO-->
                                                                                    <div class="form-group">
                                                                                        <label class="control-label" for="escolha-descricao">Descrição</label>
                                                                                        <textarea id="escolha-descricao"  rows="5" class="form-control" placeholder="descrição..."></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">                                                                                    
                                                                                <div class="col-xs-12">
                                                                                    <p>Adicionar comentário?</p>
                                                                                    <!--COMENTÁRIO-->
                                                                                    <div class="form-group">
                                                                                        <label class="control-label" for="escolha-comentario">Comentário <small class="text-success">opcional</small></label>
                                                                                        <textarea id="escolha-comentario" rows="3" class="form-control" placeholder="comentário..."></textarea>
                                                                                    </div>
                                                                                    <!--/COMENTÁRIO-->
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-right">
                                                                                <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Atualizar</strong></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /TAB EDITAR ATIVIDADE --> 
                                                        </div>
                                                        <!-- /CONTEUDO DAS TABS -->
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
                                                    <!-- CARD DE ATIVIDADE -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="atividade {{$cor}}" atividade="{{$atividade->id}}">
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
                                                                                            <p class="form-control-static" atividade="status">{{$atividade->status}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Iniciado:</label>
                                                                                        <div class="col-md-8">
                                                                                            <p class="form-control-static" atividade="iniciada">{{$atividade->iniciada == null ? 'Não definida' : $atividade->iniciada->format('d/m/Y H:i')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Finalizado:</label>
                                                                                        <div class="col-md-8">
                                                                                            <p class="form-control-static" atividade="finalizada">{{$atividade->finalizada == null ? 'Não definida' : $atividade->finalizada->format('d/m/Y H:i')}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <small class="text-success">Título</small><br>
                                                                        <h3 class="m-b" atividade="titulo">{{$atividade->titulo}}</h3>
                                                                        <small class="text-success">Descrição</small>
                                                                        <p atividade="descricao">{{$atividade->descricao}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr class="hr-line-solid">
                                                                <div class="row" atividade="comentario">
                                                                    @foreach ($comentarios[$atividade->id] as $comentario)
                                                                    <span class="text-success">{{$comentario->created_at->format('d/m/Y H:i')}} </span>- <strong>{!!$comentario->usuario->nome!!}</strong> {!!$comentario->status!!} {!!$comentario->comentario!!}<br>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- //CARD DE ATIVIDADE -->
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- /TAB 1 -->
                                            <!-- TAB 2 -->
                                            <div class="tab-pane active" id="tab-2">
                                                <div class="chat-form">
                                                    <img alt="usuário" class="img-circle pull-left" src="/media/avatars/{!!Auth::user()->avatar!!}">
                                                    <div class="media-body">
                                                        <h4>Gabriel Tosetti</h4>
                                                        <!-- MENSAGENS -->
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="tab" role="tabpanel">
                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li role="presentation" class="active"><a class="info" href="#mens-publica" role="tab" data-toggle="tab">Publico</a></li>
                                                                        <li role="presentation"><a class="warning" href="#mens-privada" role="tab" data-toggle="tab">Privado</a></li>
                                                                    </ul>
                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <!-- MENSAGEM PUBLICA -->                                                                            
                                                                        <div role="tabpanel" class="tab-pane fade in active" id="mens-publica">
                                                                            <form role="form" method="POST" id="mensagem-form-publica">
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control" id="mensagem-publica" rows="4" placeholder="Mensagem pública..."></textarea>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Postar</strong></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- /MENSAGEM PUBLICA -->
                                                                        <!-- MENSAGEM PRIVADA -->
                                                                        <div role="tabpanel" class="tab-pane fade" id="mens-privada">
                                                                            <form role="form" method="POST" id="mensagem-form-privada">
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control" id="mensagem-privada" rows="4" placeholder="Mensagem privada..."></textarea>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Postar</strong></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- /MENSAGEM PRIVADA -->
                                                                    </div>
                                                                </div>                                                                    
                                                            </div>
                                                        </div>
                                                        <!-- /MENSAGENS -->
                                                    </div>
                                                </div>
                                                <div class="feed-activity-list">
                                                    <!-- TABS MENSAGENS -->
                                                    <div class="tab" role="tabpanel">
                                                        <!-- NOME DAS TABS -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#tab-todas" role="tab" data-toggle="tab">Todas</a></li>
                                                            <li role="presentation"><a class="info" href="#tab-publica" role="tab" data-toggle="tab">Publico</a></li>
                                                            <li role="presentation"><a class="warning" href="#tab-privada" role="tab" data-toggle="tab">Privado</a></li>
                                                        </ul>
                                                        <!-- /NOME DAS TABS -->
                                                        <!-- Tab panes -->
                                                        <!-- CONJUNTO DAS TABS LISTA MENSAGEM -->
                                                        <div class="tab-content">
                                                            <!-- MENSAGEM TODAS -->                                                            
                                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-todas">
                                                                @php 
                                                                    $total = count($mensagens);
                                                                    $saida = false;
                                                                    $proximoI = 1;
                                                                    $nTem = true;
                                                                @endphp
                                                                @for ($i = 0; $i < $total; $i++) 
                                                                <?php $nTem = false;?>                                                                        
                                                                <div class="feed-element">
                                                                    <img alt="image" class="img-circle pull-left" src="/media/avatars/{{$mensagens[$i]->usuario->avatar}}">
                                                                    <div class="media-body ">
                                                                        <small class="pull-right">{{$mensagens[$i]->created_at->diffForHumans()}}</small>
                                                                        <strong>{{$mensagens[$i]->usuario->nome}}</strong> escreveu <br>
                                                                        <small class="text-muted">{{$mensagens[$i]->created_at->formatLocalized('%A, %d de %B %Y')}}</small>                                                            
                                                                    </div>                                                        
                                                                    <div class="mensagem-seta {{$mensagens[$i]->tipo}}" mensagem-user="{{$mensagens[$i]->usuario->id}}"><!-- primeiro div -->                                                                      
                                                                        {!!$mensagens[$i]->mensagem!!}
                                                                        <p mensagem-id="{{$mensagens[$i]->id}}"><small class="pull-right">Enviada {{$mensagens[$i]->created_at->format('H:i')}}</small></p>
                                                                        @if(($i+1) != $total)
                                                                            @while(($saida == false) && ($mensagens[$i]->usuario->id == $mensagens[$proximoI]->usuario->id))
                                                                                @if($mensagens[$i]->tipo == $mensagens[$proximoI]->tipo)
                                                                                    <hr>
                                                                                    {!!$mensagens[$proximoI]->mensagem!!}
                                                                                    <p mensagem-id="{{$mensagens[$i]->id}}"><small class="pull-right">Enviada {{$mensagens[$proximoI]->created_at->format('H:i')}}</small></p>
                                                                                @else
                                                                                    </div>
                                                                                    <div class="mensagem {{$mensagens[$proximoI]->tipo}}">                                                                        
                                                                                        {!!$mensagens[$proximoI]->mensagem!!}
                                                                                        <p mensagem-id="{{$mensagens[$i]->id}}"><small class="pull-right">Enviada {{$mensagens[$proximoI]->created_at->format('H:i')}}</small></p>                                                                                    
                                                                                @endif
                                                                                @php
                                                                                    $i = $proximoI;
                                                                                    $proximoI++;
                                                                                    $saida = $proximoI == $total ? true : false;
                                                                                @endphp
                                                                            @endwhile
                                                                            @php 
                                                                                $saida = false;
                                                                                $proximoI++;
                                                                            @endphp
                                                                        @endif
                                                                    </div><!-- primeiro /div -->
                                                                </div>                                                                
                                                                @endfor   
                                                                @if($nTem)
                                                                    <div class="feed-element">                                                   
                                                                        <div class="mensagem-vazia todas">                                                                   
                                                                            Não há mensagens
                                                                        </div>  
                                                                    </div>                                                                     
                                                                @endif                                                               
                                                            </div>                                                            
                                                            <!-- /MENSAGEM TODAS -->
                                                            <!-- MENSAGEM PUBLICA -->
                                                            <div role="tabpanel" class="tab-pane fade in" id="tab-publica">
                                                                @php 
                                                                    $total = count($mensagens);
                                                                    $saida = false;
                                                                    $proximoI = 1;
                                                                    $nTem = true;
                                                                @endphp
                                                                @for ($i = 0; $i < $total; $i++) 
                                                                    @if($mensagens[$i]->tipo == "publica") 
                                                                    <?php $nTem = false;?>                                                                     
                                                                    <div class="feed-element">
                                                                        <img alt="image" class="img-circle pull-left" src="/media/avatars/{{$mensagens[$i]->usuario->avatar}}">
                                                                        <div class="media-body ">
                                                                            <small class="pull-right">{{$mensagens[$i]->created_at->diffForHumans()}}</small>
                                                                            <strong>{{$mensagens[$i]->usuario->nome}}</strong> escreveu <br>
                                                                            <small class="text-muted">{{$mensagens[$i]->created_at->formatLocalized('%A, %d de %B %Y')}}</small>                                                            
                                                                        </div>                                                        
                                                                        <div class="mensagem-seta {{$mensagens[$i]->tipo}}"><!-- primeiro div -->                                                                      
                                                                            {!!$mensagens[$i]->mensagem!!}
                                                                            <p><small class="pull-right">Enviada {{$mensagens[$i]->created_at->format('H:i')}}</small></p>
                                                                            @if(($i+1) != $total)
                                                                                @while(($saida == false) && ($mensagens[$i]->usuario->id == $mensagens[$proximoI]->usuario->id))
                                                                                    @if($mensagens[$proximoI]->tipo == "publica")
                                                                                        <hr>
                                                                                        {!!$mensagens[$proximoI]->mensagem!!}
                                                                                        <p><small class="pull-right">Enviada {{$mensagens[$proximoI]->created_at->format('H:i')}}</small></p>                                                                                   
                                                                                    @endif
                                                                                    @php
                                                                                        $i = $proximoI;
                                                                                        $proximoI++;
                                                                                        $saida = $proximoI == $total ? true : false;
                                                                                    @endphp
                                                                                @endwhile
                                                                                @php 
                                                                                    $saida = false;
                                                                                    $proximoI++;
                                                                                @endphp
                                                                            @endif
                                                                        </div><!-- primeiro /div -->     
                                                                        
                                                                    </div> 
                                                                    @endif
                                                                    @php
                                                                        $proximoI++;
                                                                    @endphp                                                                 
                                                                @endfor  
                                                                @if($nTem)
                                                                    <div class="feed-element">                                                   
                                                                        <div class="mensagem-vazia publica">                                                                   
                                                                            Não há mensagens Públicas
                                                                        </div>  
                                                                    </div>                                                                     
                                                                @endif                                                               
                                                            </div>
                                                            <!-- /MENSAGEM PUBLICA -->
                                                            <!-- MENSAGEM PRIVADA -->
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-privada">
                                                                @php 
                                                                    $total = count($mensagens);
                                                                    $saida = false;
                                                                    $proximoI = 1;
                                                                    $nTem = true;
                                                                @endphp
                                                                @for ($i = 0; $i < $total; $i++) 
                                                                    @if($mensagens[$i]->tipo == "privada") 
                                                                    <?php $nTem = false;?>                                                                  
                                                                    <div class="feed-element">
                                                                        <img alt="image" class="img-circle pull-left" src="/media/avatars/{{$mensagens[$i]->usuario->avatar}}">
                                                                        <div class="media-body ">
                                                                            <small class="pull-right">{{$mensagens[$i]->created_at->diffForHumans()}}</small>
                                                                            <strong>{{$mensagens[$i]->usuario->nome}}</strong> escreveu <br>
                                                                            <small class="text-muted">{{$mensagens[$i]->created_at->formatLocalized('%A, %d de %B %Y')}}</small>                                                            
                                                                        </div>                                                        
                                                                        <div class="mensagem-seta {{$mensagens[$i]->tipo}}"><!-- primeiro div -->                                                                      
                                                                            {!!$mensagens[$i]->mensagem!!}
                                                                            <p><small class="pull-right">Enviada {{$mensagens[$i]->created_at->format('H:i')}}</small></p>
                                                                            @if(($i+1) != $total)
                                                                                @while(($saida == false) && ($mensagens[$i]->usuario->id == $mensagens[$proximoI]->usuario->id))
                                                                                    @if($mensagens[$proximoI]->tipo == "privada")
                                                                                        <hr>
                                                                                        {!!$mensagens[$proximoI]->mensagem!!}
                                                                                        <p><small class="pull-right">Enviada {{$mensagens[$proximoI]->created_at->format('H:i')}}</small></p>                                                                                   
                                                                                    @endif
                                                                                    @php
                                                                                        $i = $proximoI;
                                                                                        $proximoI++;
                                                                                        $saida = $proximoI == $total ? true : false;
                                                                                    @endphp
                                                                                @endwhile
                                                                                @php 
                                                                                    $saida = false;
                                                                                    $proximoI++;
                                                                                @endphp
                                                                            @endif
                                                                        </div><!-- primeiro /div -->     
                                                                    </div> 
                                                                    @endif 
                                                                    @php
                                                                        $proximoI++;
                                                                    @endphp  
                                                                @endfor
                                                                @if($nTem)
                                                                    <div class="feed-element">                                                   
                                                                        <div class="mensagem-vazia privada">                                                                     
                                                                            Não há mensagens Privadas
                                                                        </div>    
                                                                    </div>                                                                     
                                                                @endif 
                                                            </div>
                                                            <!-- /MENSAGEM PRIVADA -->
                                                        </div>
                                                        <!-- /CONJUNTO DAS TABS LISTA MENSAGEM -->
                                                    </div>
                                                    <!-- /TABS MENSAGENS -->
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
<!-- Toastr script -->
<script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
<!-- Ladda -->
    <script src="{{ asset('js/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ladda/ladda.jquery.min.js') }}"></script>
<script>

$(document).ready(function(){
    iniciarMultiUsuario();
    iniciarDateFields();
    iniciarEditableFields();
    iniciarTooltipFields();
    iniciarToastrOptions();  

    var atividades = {!! $atividades !!};
    atulizarCamposEditar(atividades, $( "#atividade-escolha option:first-child" ).val());
    @php
        $ultimaPrivada = null;
        $ultimaPublica = null;
        $total = count($mensagens);
        if($total != 0)
        {
            foreach($mensagens as $mensagem)
            {
                if($mensagem->tipo == "publica")
                {
                    if($ultimaPublica == null) $ultimaPublica = $mensagem;
                } else {
                    if($ultimaPrivada == null) $ultimaPrivada = $mensagem;
                }
                if($ultimaPrivada != null && $ultimaPublica != null) break;
            }
        }        
    @endphp 
    @if($ultimaPublica != null)
        var ultimaPublica = {!!$ultimaPublica!!};
    @else
        var ultimaPublica = null;
    @endif
    @if($ultimaPrivada != null)
        var ultimaPrivada = {!!$ultimaPrivada!!};
    @else
        var ultimaPrivada = null;
    @endif

    $(".chosen-select").chosen({
        no_results_text: "Oops, não encontrado!"
    });
    
    $('#atividade-nova').on("submit", function (e) {
        var btn = $( '#btn-criar' ).ladda();
        btn.ladda('start');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var formData = {
            status: $('#atividade-status').val(),
            iniciada: $('#atividade-inicio').val(),
            finalizada: $('#atividade-final').val(),
            titulo: $('#atividade-titulo').val(),
            descricao: $('#atividade-descricao').val(),
            id_conserto: "{{$conserto->id}}",
            id_usuario: "{{ Auth::user()->id }}"
        }
        $.ajax({
            type: "POST",
            url: "{{route('nova_atividade')}}",
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data.status == "Completado")
                    {cor = "success"}
                else if(data.status == "Em andamento")
                    {cor = "warning"}
                else
                    {cor = "danger"}

                card=`  <div class="row">
                            <div class="col-md-12">
                                <div class="atividade `+cor+`" atividade="`+data.id+`">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="row user-group">
                                                <p class="atividade-id">Atividade #`+data.id+`</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Status:</label>
                                                            <div class="col-md-8">
                                                                <p class="form-control-static" atividade="status">`+data.status+`</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Iniciado:</label>
                                                            <div class="col-md-8">
                                                                <p class="form-control-static" atividade="iniciada">`+data.iniciada+`</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Finalizado:</label>
                                                            <div class="col-md-8">
                                                                <p class="form-control-static" atividade="finalizada">`+data.finalizada+`</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                            <small class="text-success">Título</small><br>
                                            <h3 class="m-b" atividade="titulo">`+data.titulo+`</h3>
                                            <small class="text-success">Descrição</small>
                                            <p atividade="descricao">`+data.descricao+`</p>
                                        </div>
                                    </div>
                                    <hr class="hr-line-solid">
                                    <div class="row" atividade="comentario">
                                        <span class="text-success">`+data.comentario_criado+` </span>- <strong>`+data.comentario_usuario+`</strong> `+data.comentario_status+`<br>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                $(".lista-atividades").prepend(card);
                
                atividades.push({
                    "id": data.id,
                    "status": data.status,
                    "iniciada": data.iniciada_semformat,
                    "finalizada": data.finalizada_semformat,
                    "titulo": data.titulo,
                    "descricao": data.descricao
                });
                console.log(atividades);
                toastr["success"]('Atividade adicionada com sucesso !','Atividade');
                $("#atividade-escolha").prepend($('<option>', {
                    value: data.id,
                    text: '#'+data.id+' - '+data.titulo
                }));

            },
            error: function (data) {
                console.log('Error:', data);
                toastr["error"]('Atividade não pode ser editada !','Atividade');
            }
        });
        e.preventDefault();
        btn.ladda( 'stop' );
    });
    $('#atividade-editar').on("submit", function (e) {
        e.preventDefault();        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });        
        if(($('#escolha-final').val() == "Não definido") || ($('#escolha-final').val() == ""))
        {
            var d_finalizada = "nao";
        } else {
            var d_finalizada = $('#escolha-final').val();
        }
        var editarAtividade = {
            id: $('#atividade-escolha').val(),
            status: $('#escolha-status').val(),
            iniciada: $('#escolha-inicio').val(),
            finalizada: d_finalizada,
            titulo: $('#escolha-titulo').val(),
            descricao: $('#escolha-descricao').val(),
            comentario: $('#escolha-comentario').val() == "" ? null : $('#escolha-comentario').val(),
        };

        $.ajax({
            type: "POST",
            url: "{{route('editar_atividade')}}",
            data: editarAtividade,
            dataType: 'json',
            success: function (data) {

                if(data.status == "NOK")
                {
                    toastr["warning"]('Nenhuma alteração feita!','Atividade');                    
                } else
                {
                    if(data.atividade.status != null)
                    {
                        $("[atividade='"+data.atividade.id+"']").attr("class", "atividade "+data.atividade.cor);
                        $("[atividade='"+data.atividade.id+"'] [atividade='status'").text(data.atividade.status);
                    }
                    if(data.atividade.iniciada != null)
                    {
                        $("[atividade='"+data.atividade.id+"'] [atividade='iniciada'").text(data.atividade.iniciada);
                    }
                    if(data.atividade.finalizada != null)
                    {
                        $("[atividade='"+data.atividade.id+"'] [atividade='finalizada'").text(data.atividade.finalizada);
                    }
                    if(data.atividade.titulo != null)
                    {
                        $("[atividade='"+data.atividade.id+"'] [atividade='titulo'").text(data.atividade.titulo);
                    }
                    if(data.atividade.descricao != null)
                    {
                        $("[atividade='"+data.atividade.id+"'] [atividade='descricao'").text(data.atividade.descricao);
                    }
                    $("[atividade='"+data.atividade.id+"'] [atividade='comentario'").append("<span class='text-success'>"+data.comentario.created_at+"</span> - <strong>"+data.comentario.usuario+"</strong> "+data.comentario.status+" "+(data.comentario.comentario == null ? "" : data.comentario.comentario)+"<br>");
                    $('#escolha-comentario').val('');
                    $.each(atividades, function(i, atividade) {
                        if(atividade["id"] == data.atividade.id)
                        {
                            if(data.atividade.status != null){atividade["status"] = data.atividade.status}
                            if(data.atividade.iniciada != null){atividade["iniciada"] = data.atividade.iniciada}
                            if(data.atividade.finalizada != null){atividade["finalizada"] = data.atividade.finalizada}
                            if(data.atividade.titulo != null){atividade["titulo"] = data.atividade.titulo}
                            if(data.atividade.descricao != null){atividade["descricao"] = data.atividade.descricao}
                        }
                    });
                    toastr["success"]('Atividade atualizada com sucesso!','Atividade');
                }
            },
            error: function (data) {
                console.log('Error:', data);
                toastr["error"]('Atividade não pode ser editada !','Atividade');
            }
        });

        
    });

    $("#atividade-escolha").on("change", function() {
        atulizarCamposEditar(atividades, this.value);
    });
    
    $('#mensagem-form-publica').on("submit", function (e) {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var formData = {
            mensagem: $('#mensagem-publica').val(),
            tipo: "publica",
            id_conserto: "{{$conserto->id}}",
            id_usuario: "{{ Auth::user()->id }}"
        };
        $.ajax({
            type: "POST",
            url: "{{route('nova_conserto_mensagem')}}",
            data: formData,
            dataType: 'json',
            success: function (data) {
                inserirMensagem(data, ultimaPrivada, ultimaPublica);
                toastr["success"]('Mensagem enviada com sucesso !','Mensagem');
            },
            error: function (data) {
                console.log('Error:', data);
                toastr["error"]('Mensagem não pode ser enviada !','Mensagem');
            }
        });
        e.preventDefault();
    });
    $('#mensagem-form-privada').on("submit", function (e) {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var formData = {
            mensagem: $('#mensagem-privada').val(),
            tipo: "privada",
            id_conserto: "{{$conserto->id}}",
            id_usuario: "{{ Auth::user()->id }}"
        }
        $.ajax({
            type: "POST",
            url: "{{route('nova_conserto_mensagem')}}",
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data.tipo == "privada")
                    {inserirMensagem(data)}
                else
                    {}
                toastr["success"]('Mensagem enviada com sucesso !','Mensagem');
            },
            error: function (data) {
                console.log('Error:', data);
                toastr["error"]('Mensagem não pode ser enviada !','Mensagem');
            }
        });
        e.preventDefault();
    });


}); /* / DOC READY */


 function iniciarMultiUsuario(){
    var nomes = <?php echo json_encode($usuarios); ?>;

    $.each(nomes, function (i, nome) {
        $('#select-copia').append($('<option>', {
            value: nome,
            text : nome
        }));
    });

}
function iniciarDateFields(){
    $('.form_datetime').datetimepicker({
        language:  'pt-BR',
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        minuteStep: 5,
        todayHighlight: true,
        pickerPosition: 'bottom-left'
    });
}
function iniciarEditableFields(){
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
}
function iniciarTooltipFields(){
    $('[data-toggle="tooltip"]').tooltip();
}
function iniciarToastrOptions(){
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000"
    };
}
function atulizarCamposEditar(atividades, id){
    $.each(atividades, function(i, atividade) {
        if(atividade["id"] == id)
        {
            $('#escolha-status').val(atividade["status"]);        
            $('#escolha-inicio').val(atividade["iniciada"]);                     
            $('[escolha="data-inicio"]').val(atividade["iniciada"]);                                   
            $('#escolha-final').val(atividade["finalizada"] == null ? "Não definido" : atividade["finalizada"]);    
            $('[escolha="data-final"]').val(atividade["finalizada"] == null ? "Não definido" : atividade["finalizada"]);       
            $('#escolha-titulo').text(atividade["titulo"]);        
            $('#escolha-titulo').val(atividade["titulo"]);        
            $('#escolha-descricao').text(atividade["descricao"]);  
            $('#escolha-descricao').val(atividade["descricao"]);  
        }
    }); 
}
function inserirMensagem(mensagem, ultPrivada, ultPublica){
    if(mensagem.tipo == "publica")
    {
        if(ultPublica.usuario.id == mensagem.usuario.id)
        {
            var texto = mensagem.mensagem+`
                        <p><small class="pull-right">Enviada `+mensagem.criada+`</small></p>
                        <hr> `;
            $("[mensagem-user = '"+ultPublica.usuario.id+"']:first").prepend(texto);
        }
        else
        {
            var texto = `<div class="feed-element">
                            <img alt="image" class="img-circle pull-left" src="/media/avatars/`+mensagem.usuario.avatar+`">
                            <div class="media-body">
                                <small class="pull-right">`+mensagem.criada_diff+`</small>
                                <strong>`+mensagem.usuario.nome+`</strong> escreveu <br>
                                <small class="text-muted">`+mensagem.criada_extenso+`</small>                                                            
                            </div>                                                        
                            <div class="mensagem-seta `+mensagem.tipo+`">                                                                        
                                `+mensagem.mensagem+`
                                <p><small class="pull-right">Enviada `+mensagem.criada+`</small></p>
                            </div>
                        </div>`;
        }
    }
    
}
</script>
@stop
