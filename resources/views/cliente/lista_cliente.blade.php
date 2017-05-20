@extends('layouts.principal')

@section('title', 'Clientes')

@section('content_title', 'Lista de Clientes')

@section('breadcrumbs')
    {!! Breadcrumbs::render('clientes') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Tabela de clientes
                            </h1>
                            <small>
                                Tabela abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
