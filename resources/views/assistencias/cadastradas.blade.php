@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Clientes')
@section('breadcrumbs')
    {!! Breadcrumbs::render('assistenciascadastradas') !!}
@endsection


@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />
      <link href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@stop

@section('content')

    <div>
    </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Clients</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>App Views</a>
                    </li>
                    <li class="active">
                        <strong>Clients</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="full-height-scroll">
            <div class="table-responsive">

                    @foreach($assistencias as $assistencia)
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr>
                            <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                            <td><a data-toggle="tab" href="#contact-1" class="client-link">{{$assistencia->nome}}</a></td>
                            <td> {{$assistencia->cidade}}/td>
                            <td> {{$assistencia->bairro}},<br></td>
                            <td> gravida@rbisit.com</td>
                            <td class="client-status"><span class="label label-primary">Active</span></td>
                        </tr>

                        </tbody>
                    </table>

                    @endforeach
                    <!--MODAL-->
                    <div class="modal inmodal" id="modal-detalhes" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <img alt="image" class="img-circle img-responsive img-lg center-block" src="/media/avatars/{{$assistencia->avatar}}">
                                    <h4 class="modal-title" id="modal-titulo"></h4>
                                    <small class="font-bold" ></small>
                                </div>
                                <div class="modal-body">
                                    <div class="form-horizontal">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">RG</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-RG"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">CPF</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-CPF"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">E-mail</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-e-mail"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Celular</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-celular"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Telefone</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-telefone"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Cidade</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-cidade"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Bairro</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-bairro"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Rua</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-rua"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Número</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-numero"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Comple.</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-complemento"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Permissão</label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-permissao"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!--/modal content-->
                        </div>
                    </div>
                    <!--/MODAL-->
    <!--/<ROW--></div>
            </div>
@endsection

@section('scripts')
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        var url = "/assistencias";
        /*DETALHES*/
        $('#lista_assistencia').on("click", ".open-modal", function () {
            var assistencia_id = $(this).attr('value');
            console.log("assistencia id: "+assistencia_id);

            $.get(url + '/detalhes/' + assistencia_id, function (data) {
                //success data
                console.log(data);
                $('#modal-titulo').text(data.nome);
                $('#modal-RG').text(data.rg);
                $('#modal-CPF').text(data.cpf);
                $('#modal-e-mail').text(data.email);
                $('#modal-celular').text(data.celular);
                $('#modal-telefone').text(data.telefone);
                $('#modal-cidade').text(data.cidade);
                $('#modal-bairro').text(data.bairro);
                $('#modal-rua').text(data.rua);
                $('#modal-numero').text(data.numero);
                $('#modal-complemento').text(data.complemento);
                $('#modal-permissao').text(data.permissao);

                $('#modal-detalhes').modal('show');
            })
        });
        /* /DETALHES*/
        /*DELETAR CLIENTE*/
        $('form.form-deletar').on("submit", function (event) {

            var assistencia_id = $(this).attr('value');
            var assistencia_nome = $("#assistencia-nome-"+assistencia_id).text();

            swal({
                title: 'Deletar?',
                text: 'Tem certeza que deseja excluir '+assistencia_nome+'?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: function () {
                    return new Promise(function (resolve, reject) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "DELETE",
                            url: url + '/remove/' + assistencia_id,
                            success: function (data) {
                                //console.log(data);

                                $("#assistencia-" + assistencia_id).remove();
                                resolve();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                    });
                },
                allowOutsideClick: false
                }).then(function (data) {
                swal({
                    type: 'success',
                    title: 'Cliente deletado!',
                })
            });
            event.preventDefault();
        });
        /*/DELETAR CLIENTE*/
    }); /* /DOCUMENT READY*/
</script>
@stop
