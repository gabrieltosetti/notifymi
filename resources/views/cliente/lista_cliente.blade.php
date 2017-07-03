@extends('layouts.principal')

@section('title', 'Clientes')

@section('content_title', 'Lista de Clientes')

@section('breadcrumbs')
    {!! Breadcrumbs::render('clientes') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    @foreach($clientes as $cliente)
                    <div class="col-xs-6 col-sm-6 col-lg-4">
                        <div class="contact-box">
                            <a href="{{ route('detalhes_cliente', ['id' => $cliente->id]) }}">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="{{ asset('img/a2.jpg') }}">
                                            <div class="m-t-xs font-bold">{{$cliente->cargo->cargo}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 hidden-xs">
                                        <h3><strong>{{cliente->nome}}</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> {{$usuario->cidade}}</p>
                                        <address>
                                            <strong>{{$usuario->assistencia->nome}}, Inc.</strong><br>
                                            {{$usuario->bairro}},<br>
                                            {{$usuario->rua}}, {{$usuario->numero}}<br>
                                            <abbr title="Celular">Cel:</abbr> {{$usuario->celular}}
                                        </address>
                                    </div>
                                    <div class="col-sm-8 text-center visible-xs-block">
                                        <h3><strong>{{$usuario->nome}}</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> {{$usuario->cidade}}</p>
                                        <address>
                                            <strong>{{$usuario->assistencia->nome}}, Inc.</strong><br>
                                            {{$usuario->bairro}},<br>
                                            {{$usuario->rua}}, {{$usuario->numero}}<br>
                                            <abbr title="Celular">Cel:</abbr> {{$usuario->celular}}
                                        </address>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 hidden-xs">
                                    <form action="{{ route('remove_usuario', ['id' => $usuario->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-xs btn-danger">Deletar</button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-info btn-block" href="{{ route('detalhes_usuario', ['id' => $usuario->id]) }}">Info</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 p-w-xs hidden-xs">
                                    <a class="btn btn-xs btn-warning btn-block" href="{{ route('edita_usuario', ['id' => $usuario->id]) }}">Editar</a>
                                </div>
                                <!--CELULAR-->
                                <div class="col-xs-4 col-sm-4 visible-xs-block">
                                    <form action="{{ route('remove_usuario', ['id' => $usuario->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger btn-circle btn-lg" type="submit"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <div class="col-xs-8 col-sm-3 p-w-xs visible-xs-block">
                                    <a class="btn btn-success btn-circle btn-lg" href="{{ route('detalhes_usuario', ['id' => $usuario->id]) }}"><i class="fa fa-search"></i></a>

                                    <a class="btn btn-primary btn-circle btn-lg" href="{{ route('edita_usuario', ['id' => $usuario->id]) }}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!--/col lg 4-->
                    @endforeach
    <!--/<ROW--></div>
            </div>
@endsection
