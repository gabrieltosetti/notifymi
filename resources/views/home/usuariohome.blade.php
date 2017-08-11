@extends('layouts.principal', ['breadcrumb' => 'false'])

@section('title', 'Página Inicial')
<!--ACHO QUE A HOME NAO DEVERIA TER OS BREADCRUMBS E SER PERSONALIZADA COMO UMA DASHBOARD...-->
@section('content')

<head>
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
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
  <div class="ibox float-e-margins">
    <div class="col-lg-3">
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
  <div class="col-lg-6">
    <div class="ibox-content">
      <h2>Consertos</h2>
      <div>
        <canvas id="barChart" width="200" height="150"></canvas>
      </div>
    </div>
  </div>
  </div>



</div>
<!--/TABELA DE CONSERTOS-->



@endsection
@section('scripts')


<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartJs/Chart.bundle.js') }}"></script>
<script>


var dadosGrafico = {
  labels: [
    @foreach($funcionarios as $funcionario)
    "{{str_limit($funcionario->nome , 12)}}",
    @endforeach
  ],
  datasets: [
    {
      label: "Conluídos",
      backgroundColor: 'rgba(220, 220, 220, 0.5)',
      pointBorderColor: "#fff",
      data: [
        @foreach($funcionarios as $funcionario)
        "{{$funcionario->id}}",
        @endforeach
      ]
    },
    {
      label: "Em andamento",
      backgroundColor: 'rgba(26,179,148,0.5)',
      borderColor: "rgba(26,179,148,0.7)",
      pointBackgroundColor: "rgba(26,179,148,1)",
      pointBorderColor: "#fff",
      data: [
        @foreach($funcionarios as $funcionario)
        "{{$funcionario->numero}}",
        @endforeach
      ]
    }
  ]
};

var opcoesGrafico = {
  responsive: true
};


var ctx2 = document.getElementById("barChart").getContext("2d");
new Chart(ctx2, {type: 'bar', data: dadosGrafico, options:opcoesGrafico});
</script>
@stop
