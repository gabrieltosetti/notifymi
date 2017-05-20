@extends('layouts.principal')

@section('title', 'Novo Cliente')

@section('content_title', 'Novo Cliente')

@section('breadcrumbs')
    {!! Breadcrumbs::render('novo_cliente') !!}
@endsection

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Novo Cliente
                            </h1>
                            <small>
                                Formulário abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection