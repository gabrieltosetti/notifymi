@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Consertos')



@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />

      <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/jquery.dataTables.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/buttons.dataTables.css') }}">

@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Lista de Consertos</h5>
                    <div class="ibox-tools">
                        <a href="" class="btn btn-primary btn-xs">Novo conserto</a>
                    </div>
                </div>
                        <div class="ibox-content">
                            <!-- LINHA DE PESQUISA -->
                            <div class="m-b-lg">
                                <div class="input-group">
                                    <input type="text" placeholder="Pesquisa..." class=" form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <div class="m-t-md">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-comments"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-user"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-list"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-pencil"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-print"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-cogs"></i> </button>
                                    </div>
                                    <strong>Encontrados 61 consertos.</strong>
                                </div>
                            </div>
                            <!-- /LINHA DE PESQUISA -->
                            <div class="table-responsive">
                            <table class="table table-hover issue-tracker dataTables-conserto">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descrição</th>
                                        <th>Atribuído</th>
                                        <th>Cliente</th>
                                        <th>Criado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ADDED -->
                                    <tr>
                                        <td class="issue-id"> <!-- ID -->
                                            #1
                                        </td>
                                        <td class="issue-info"> <!-- DESCRIÇÃO -->
                                            <span class="label label-primary">Aberto</span> <a href="#">Título do conserto</a>
                                            <small>
                                                Aqui fica a breve descrição.
                                            </small>
                                        </td>
                                        <td><!-- ATRIBUIDO -->
                                            <a href="#">Gabriel Tosetti</a>
                                        </td>
                                        <td> <!-- CLIENTE -->
                                            <a href="#">Matheus Luz</a>
                                        </td>
                                        <td><!-- CRIADO -->
                                            12/07/2017 18:40
                                        </td>
                                    </tr>
                                    <!-- /ADDED -->
                                    <!-- PENDENTE -->
                                    <tr>
                                        <td class="issue-id"> <!-- ID -->
                                            #2
                                        </td>
                                        <td class="issue-info"> <!-- DESCRIÇÃO -->
                                            <span class="label label-warning">Pendente</span> <a href="#">Título do conserto</a>
                                            <small>
                                                Aqui fica a breve descrição.
                                            </small>
                                        </td>
                                        <td><!-- ATRIBUIDO -->
                                            <a href="#">Gabriel Tosetti</a>
                                        </td>
                                        <td> <!-- CLIENTE -->
                                            <a href="#">Matheus Luz</a>
                                        </td>
                                        <td><!-- CRIADO -->
                                            12/07/2017 18:40
                                        </td>
                                    </tr>
                                    <!-- /PENDENTE -->
                                    <!-- PENDENTE -->
                                    <tr>
                                        <td class="issue-id"> <!-- ID -->
                                            #3
                                        </td>
                                        <td class="issue-info"> <!-- DESCRIÇÃO -->
                                            <span class="label label-success">Em espera</span> <a href="#">Título do conserto</a>
                                            <small>
                                                Aqui fica a breve descrição.
                                            </small>
                                        </td>
                                        <td><!-- ATRIBUIDO -->
                                            <a href="#">Gabriel Tosetti</a>
                                        </td>
                                        <td> <!-- CLIENTE -->
                                            <a href="#">Matheus Luz</a>
                                        </td>
                                        <td><!-- CRIADO -->
                                            12/07/2017 18:40
                                        </td>
                                    </tr>
                                    <!-- /PENDENTE -->
                                    <!-- FECHADO -->
                                    <tr>
                                        <td class="issue-id"> <!-- ID -->
                                            #4
                                        </td>
                                        <td class="issue-info"> <!-- DESCRIÇÃO -->
                                            <span class="label label-default">Fechado</span> <a href="#">Título do conserto</a>
                                            <small>
                                                Aqui fica a breve descrição.
                                            </small>
                                        </td>
                                        <td><!-- ATRIBUIDO -->
                                            <a href="#">Gabriel Tosetti</a>
                                        </td>
                                        <td> <!-- CLIENTE -->
                                            <a href="#">Matheus Luz</a>
                                        </td>
                                        <td><!-- CRIADO -->
                                            12/07/2017 18:40
                                        </td>
                                    </tr>
                                    <!-- /FECHADO -->
                                    <!-- CANCELADO -->
                                    <tr>
                                        <td class="issue-id"> <!-- ID -->
                                            #5
                                        </td>
                                        <td class="issue-info"> <!-- DESCRIÇÃO -->
                                            <span class="label label-danger">Cancelado</span> <a href="#">Título do conserto</a>
                                            <small>
                                                Aqui fica a breve descrição.
                                            </small>
                                        </td>
                                        <td><!-- ATRIBUIDO -->
                                            <a href="#">Gabriel Tosetti</a>
                                        </td>
                                        <td> <!-- CLIENTE -->
                                            <a href="#">Matheus Luz</a>
                                        </td>
                                        <td><!-- CRIADO -->
                                            12/07/2017 18:40
                                        </td>
                                    </tr>
                                    <!-- /CANCELADO -->
                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="js/plugins/aaa/jszip/jszip.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/pdfmake.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/vfs_fonts.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/dataTables.buttons.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.html5.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.print.js"></script>


<script>
    $(document).ready(function(){
        $('.dataTables-conserto').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Lista Consertos'},
                {extend: 'pdf', title: 'Lista Consertos'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });

</script>


@stop
