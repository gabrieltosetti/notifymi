@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Usuários')

@section('breadcrumbs')
    {!! Breadcrumbs::render('usuarios') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    @foreach($usuarios as $usuario)
                    <div class="col-xs-6 col-sm-6 col-lg-4">
                        <div class="contact-box">
                            <a href="{{ route('detalhes_usuario', ['id' => $usuario->id]) }}">
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="img/a2.jpg">
                                        <div class="m-t-xs font-bold">{{$usuario->cargo->cargo}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-8 hidden-xs">
                                    <h3><strong>{{$usuario->nome}}</strong></h3>
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
                            </a>
                        </div>
                    </div> <!--/col lg 4--> 
                    @endforeach
    <!--/<ROW--></div>
            </div>
@endsection
