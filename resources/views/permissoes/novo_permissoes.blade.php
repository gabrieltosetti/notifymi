@extends('layouts.principal')

@section('title', 'Novo Conserto')

@section('content_title', 'Nova Permissão')

@section('breadcrumbs')
    {!! Breadcrumbs::render('novo_permissoes') !!}
@endsection

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Nova Permissão
                            </h1>
                            <small>
                                Formulário abaixo
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
