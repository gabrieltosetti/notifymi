@extends('layouts.principal')

@section('title', 'Conserto x')

@section('content_title', 'Conserto x')

@section('breadcrumbs')
    {!! Breadcrumbs::render('detalhes_conserto') !!}
@endsection

@section('css')
    <meta name="_token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/bootstrap3-editable/bootstrap-editable.css') }}" rel="stylesheet">
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
                    <strong>Criado por </strong><a href="#" class="text-navy">Gabriel Tosetti</a><a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Mudar usuário"><i class="fa fa-pencil m-r-sm"></i></a> <br>
                    13/07/2017 00:07
                </div>
                <!-- /IMAGEM -->
                <div class="row m-t-sm form-horizontal border-bottom">
                    <dl class="dl-horizontal">
                        <!-- CLIENTE -->
                        <dt class="dt-conserto">Cliente: </dt>
                        <dd class="dd-conserto m-b-sm"><a href="" class="text-navy">Matheus Luz</a><a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Mudar cliente"><i class="fa fa-pencil m-r-sm"></i></a></dd>
                        <!-- /CLIENTE -->
                        <!-- CRIADO -->
                        <dt class="dt-conserto">Criado: </dt>
                        <dd class="dd-conserto m-b-sm">13/07/2017 00:07</dd>
                        <!-- /CRIADO -->
                        <dt class="dt-conserto">Atualizado: </dt>
                        <dd class="dd-conserto m-b-sm">13/07/2017 00:41</dd>
                    </dl>
                </div>
                <div class="row m-t-sm form-horizontal border-bottom">
                    <dl class="dl-horizontal">
                        <!-- STATUS -->
                        <dt class="dt-conserto">Status: </dt>
                        <dd class="dd-conserto m-b-sm"><span class="label label-warning">Em andamento</span></dd>
                        <!-- /STATUS -->
                        <!-- PRIORIDADE -->
                        <dt class="dt-conserto">Prioridade: </dt>
                        <dd class="dd-conserto m-b-sm">Baixo</dd>
                        <!-- /PRIORIDADE -->
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <h2 id="titulo">Título do conserto aqui</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <dl>
                                    <dt>Descrição <span class="dt-editar">Editar</span></dt>
                                    <dd>
                                        <p id="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et vitae tempora ex totam, maxime voluptate quod facilis debitis error facere. Laudantium eligendi, sapiente iusto earum placeat quae neque nesciunt magni!</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                            <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-1" data-toggle="tab">Users messages</a></li>
                                        <li class=""><a href="#tab-2" data-toggle="tab">Last activity</a></li>
                                    </ul>
                                </div>
                            </div>
                                            
                            <div class="panel-body">
                                            
                            <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
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
                            <div class="tab-pane" id="tab-2">
                                            
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Title</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                           Create project in webapp
                                        </td>
                                        <td>
                                           12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                        <p class="small">
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                        </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            Various versions
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            There are many variations
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            Latin words
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Latin words, combined with a handful of model sentence structures
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            The generated Lorem
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            The first line
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            The standard chunk
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                            Lorem Ipsum is that
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            Contrary to popular
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            </p>
                                        </td>
                                            
                                    </tr>
                                            
                                    </tbody>
                                </table>
                                            
                            </div>
                            </div>
                                            
                            </div>
                                            
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /IBOX -->
            </div>
        </div><!-- /ROW -->
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/plugins/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap3-editable/bootstrap-editable.min.js') }}"></script>
<script>

$(document).ready(function(){
    iniciarMultiUsuario();

    $(".chosen-select").chosen({
        no_results_text: "Oops, não encontrado!"
    });

    $('[data-toggle="tooltip"]').tooltip();  

    $.fn.editable.defaults.mode = 'inline';
    $('#descricao').editable({
        type: 'textarea',
        title: 'Descrição'
    });
    $('#titulo').editable({
        type: 'text',
        title: 'Conserto'
    });
/*     $('#descricao').on('shown', function(e, editable) {
        $('.editable_large').parents('form').removeClass('form-inline');
    }); */


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