@extends('layouts.principal', ['breadcrumb' => 'false'])

@section('title', 'Página Inicial')
<!--ACHO QUE A HOME NAO DEVERIA TER OS BREADCRUMBS E SER PERSONALIZADA COMO UMA DASHBOARD...-->
@section('content')

        <!--
            WIDGETS
        -->
        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Today degrees </span>
                            <h2 class="font-bold">26'C</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-envelope-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span>  </span>
                            <h2 class="font-bold">260</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> New albums </span>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/WIDGETS-->
        <!--
            TABELA DE CONSERTOS !!
        -->
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>Consertos</h2>
                        <div>
                            <table class="table">
                                <tbody>
                                  <tr>
                                      <td>
                                          <button type="button" style="height:35px; width:50px" class="btn m-r-sm">{{$novo}}</button>
                                          Novos
                                      </td>
                                  </tr>
                                <tr>
                                    <td>
                                        <button type="button" style="height:35px; width:50px" class="btn btn-warning m-r-sm">{{$emandamento}}</button>
                                        Em andamento
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" style="height:35px; width:50px" class="btn btn-success m-r-sm">{{$emespera}}</button>
                                        Em espera
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <button type="button" style="height:35px; width:50px" class="btn btn-primary m-r-sm">{{$concluido}}</button>
                                        Concluído
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" style="height:35px; width:50px" class="btn btn-danger m-r-sm">{{$cancelado}}</button>
                                        Cancelado
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bar Chart Example</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
