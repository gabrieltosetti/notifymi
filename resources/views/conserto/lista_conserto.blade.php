@extends('layouts.principal')

@section('title', 'Consertos')

@section('content_title', 'Lista de Consertos')

@section('breadcrumbs')
    {!! Breadcrumbs::render('consertos') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Tabela de concertos
                            </h1>
                            <small>
                                Tabela abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
