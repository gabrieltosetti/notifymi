@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Clientes')



@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />
      <link href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row" id="lista_cliente">

                    @foreach($clientes as $cliente)


                    <div class="col-xs-6 col-sm-6 col-lg-4"  id="cliente-{{$cliente->id}}">
                        <div class="contact-box">



                            <a class="open-modal" value="{{$cliente->id}}">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="/media/avatars/{{$cliente->avatar}}">

                                        </div>
                                    </div>
                                    <div class="col-sm-8 hidden-xs">
                                        <h3><strong id="cliente-nome-{{$cliente->id}}">{{$cliente->nome}}</strong></h3>

                                        <p><i class="fa fa-map-marker"></i> {{$cliente->cidade}}</p>
                                        <address>

                                            {{$cliente->bairro}},<br>
                                            {{$cliente->rua}}, {{$cliente->numero}}<br>
                                            <abbr title="Celular">Cel:</abbr> {{$cliente->celular}}
                                        </address>
                                    </div>
                                    <div class="col-sm-8 text-center visible-xs-block">
                                        <h3><strong>{{$cliente->nome}}</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> {{$cliente->cidade}}</p>

                                        <address>
                                            {{$cliente->bairro}},<br>
                                            {{$cliente->rua}}, {{$cliente->numero}}<br>
                                            <abbr title="Celular">Cel:</abbr> {{$cliente->celular}}
                                        </address>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>



                            
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 hidden-xs">
                                    <form class="form-deletar" value="{{$cliente->id}}">
                                        <button type="submit" class="btn btn-xs btn-danger">Deletar</button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-info btn-block open-modal" value="{{$cliente->id}}">Info</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-warning btn-block" href="{{ route('edita_cliente', ['id' => $cliente->id]) }}">Editar</a>
                                </div>
                                <!--CELULAR-->
                                <div class="col-xs-4 col-sm-4 visible-xs-block">
                                    <form class="form-deletar" value="{{$cliente->id}}">
                                        <button class="btn btn-danger btn-circle btn-lg" type="submit"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs visible-xs-block">
                                    <a class="btn btn-success btn-circle btn-lg open-modal" value="{{$cliente->id}}"><i class="fa fa-search"></i></a>

                                    <a class="btn btn-primary btn-circle btn-lg" href="{{ route('edita_cliente', ['id' => $cliente->id]) }}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!--/col lg 4-->
                    @endforeach
                    <!--MODAL-->
                    <div class="modal inmodal" id="modal-detalhes" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <img alt="image" class="img-circle img-responsive img-lg center-block" src="/media/avatars/{{$cliente->avatar}}">
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
        var url = "/clientes";
        /*DETALHES*/
        $('#lista_cliente').on("click", ".open-modal", function () {
            var cliente_id = $(this).attr('value');
            console.log("cliente id: "+cliente_id);

            $.get(url + '/detalhes/' + cliente_id, function (data) {
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

            var cliente_id = $(this).attr('value');
            var cliente_nome = $("#cliente-nome-"+cliente_id).text();

            swal({
                title: 'Deletar?',
                text: 'Tem certeza que deseja excluir '+cliente_nome+'?',
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
                            url: url + '/remove/' + cliente_id,
                            success: function (data) {
                                //console.log(data);

                                $("#cliente-" + cliente_id).remove();
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
