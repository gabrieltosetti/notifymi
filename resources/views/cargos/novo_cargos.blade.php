@extends('layouts.principal')

@section('title', 'Novo Conserto')

@section('content_title', 'Novo Conserto')

@section('breadcrumbs')
    {!! Breadcrumbs::render('novo_cargos') !!}
@endsection

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Novo cargo
                            </h1>
                            <small>
                                Formulário abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
