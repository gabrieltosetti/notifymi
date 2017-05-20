@extends('layouts.principal')

@section('title', 'Novo Funcionário')

@section('content_title', 'Novo Funcionário')

@section('breadcrumbs')
    {!! Breadcrumbs::render('novo_funcionario') !!}
@endsection

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Novo Funcionário
                            </h1>
                            <small>
                                Formulário abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection