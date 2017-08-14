@extends('layouts.principal', ['breadcrumb' => 'false'])
@section('title', 'Página Inicial')
<!--ACHO QUE A HOME NAO DEVERIA TER OS BREADCRUMBS E SER PERSONALIZADA COMO UMA DASHBOARD...-->
@section('content')

<!--WIDGETS-->
<div class="row">
    <div class="col-lg-6">
        <div class="ibox-content">
            <h2>TODO List</h2>
            <small>This is example of task list</small>
            <ul class="todo-list m-t">
                <li>
                    <input type="checkbox" value="" name="" class="i-checks"/>
                    <span class="m-l-xs">Buy a milk</span>
                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                </li>
                <li>
                    <input type="checkbox" value="" name="" class="i-checks" checked/>
                    <span class="m-l-xs">Go to shop and find some products.</span>
                    <small class="label label-info"><i class="fa fa-clock-o"></i> 3 mins</small>
                </li>
                <li>
                    <input type="checkbox" value="" name="" class="i-checks" />
                    <span class="m-l-xs">Send documents to Mike</span>
                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 2 mins</small>
                </li>
                <li>
                    <input type="checkbox" value="" name="" class="i-checks"/>
                    <span class="m-l-xs">Go to the doctor dr Smith</span>
                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 42 mins</small>
                </li>
            </ul>
        </div>
    </div>
    <!--/WIDGETS-->
    <!--/TABELA DE CONSERTOS-->

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Notify-MI!
                    </h1>
                    <small>
                        Seu sistema de notificações simplificado.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    @endsection
