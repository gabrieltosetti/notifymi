@extends('layouts.principal')

@section('title', 'Funcionários')

@section('content_title', 'Lista de Funcionários')

@section('breadcrumbs')
    {!! Breadcrumbs::render('funcionarios') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Tabela de funcionários
                            </h1>
                            <small>
                                Tabela abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
