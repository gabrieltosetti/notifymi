@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Consertos')



@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />
@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row" id="lista_conserto">
                    @foreach($consertos as $conserto)
                    <div class="col-xs-6 col-sm-6 col-lg-4">
                        <div class="contact-box">
                            <a class="open-modal" value="{{$conserto->id}}">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                        <!--    <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="/media/avatars/{{$conserto->avatar}}"> -->

                                        </div>
                                    </div>
                                    <div class="col-sm-8 hidden-xs">
                                        <h3><abbr title="Modelo"> <strong>{{$conserto->modelo}}</strong></abbr></h3>
                                        <p><i class ="fa fa-wrench"></i>: {{$conserto->defeito}}</p>
                                        <p>R$: {{$conserto->orcamento}}</p>
                                        <p>obs: {{$conserto->observacao}}</p>


                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 hidden-xs">
                                    <form action="{{ route('remove_conserto', ['id' => $conserto->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-xs btn-danger">Deletar</button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-info btn-block open-modal" value="{{$conserto->id}}">Info</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-warning btn-block" href="{{ route('edita_conserto', ['id' => $conserto->id]) }}">Editar</a>
                                </div>
                                <!--orcamento-->
                                <div class="col-xs-4 col-sm-4 visible-xs-block">
                                    <form action="{{ route('remove_conserto', ['id' => $conserto->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger btn-circle btn-lg" type="submit"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs visible-xs-block">
                                    <a class="btn btn-success btn-circle btn-lg open-modal" value="{{$conserto->id}}"><i class="fa fa-search"></i></a>

                                    <a class="btn btn-primary btn-circle btn-lg" href="{{ route('edita_conserto', ['id' => $conserto->id]) }}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!--/col lg 4-->
                    @endforeach
                    <div class="modal inmodal" id="modal-detalhes" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="/media/avatars/{{$conserto->foto}}">
                                    <h4 class="modal-title" id="modal-titulo"></h4>
                                    <small class="font-bold" ></small>
                                </div>
                                <div class="modal-body">
                                    <div class="form-horizontal">
                                        <div class="row">
                                          <div class="col-xs-6">
                                              <div class="form-group">
                                                  <label class="col-sm-3 col-xs-12 control-label">Defeito</label>
                                                  <div class="col-sm-9">
                                                      <p class="form-control-static" id="modal-defeito"></p>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-sm-3 col-xs-12 control-label">Assistência: </label>
                                                  <div class="col-sm-9">
                                                      <p class="form-control-static" id="modal-assistencia"></p>
                                                  </div>
                                              </div>
                                          </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label">Resp: </label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-responsavel"></p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 col-xs-12 control-label" >Cliente: </label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static" id="modal-cliente"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label" style="text-align:left;">Data: </label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-data_entrega"></p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label" style="text-align:left;">R$: </label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-orcamento"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label" style="text-align:left;">OBS: </label>
                                                    <div class="col-sm-9">
                                                        <p class="form-control-static" id="modal-obs"></p>
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

<script>
    $(document).ready(function(){
        var url = "/consertos/detalhes";
        $('#lista_conserto').on("click", ".open-modal", function () {
            var conserto_id = $(this).attr('value');
            console.log("conserto id: "+conserto_id);

            $.get(url + '/' + conserto_id, function (data) {
                //success data
                console.log(data);
                $('#modal-titulo').text(data.modelo);
                $('#modal-orcamento').text(data.orcamento);
                $('#modal-data_entrega').text(data.data_entrega);
                $('#modal-defeito').text(data.defeito);
                $('#modal-cliente').text(data.	id_cliente);
                $('#modal-assistencia').text(data.id_assistencia);
                $('#modal-responsavel').text(data.id_usuario);
                $('#modal-obs').text(data.observacao);
                $('#modal-detalhes').modal('show');

            })
        });
    });
</script>

@stop
