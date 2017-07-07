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
                $('#modal-detalhes').modal('show');
            })
        });
    });
</script>

@stop
