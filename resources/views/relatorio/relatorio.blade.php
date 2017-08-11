@extends('layouts.principal', ['breadcrumb' => 'false'])

@section('title', 'Página Inicial')
<!--ACHO QUE A HOME NAO DEVERIA TER OS BREADCRUMBS E SER PERSONALIZADA COMO UMA DASHBOARD...-->
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="ibox">
      <div class="ibox-title">
        <h5>Lista de Consertos {{$contadorpedidos}}</h5>
        <div class="ibox-tools">
          <a href="" class="btn btn-primary btn-xs">Novo conserto</a>
        </div>
      </div>
      <div class="ibox-content">
        <h2>Consertos</h2>

        <div class="m-b-sm">

          <canvas id="barChart" width="500" height="100%"></canvas>
        </div>

      </div>


    </div>
  </div>
</div>
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
        "{{$funcionario->concluido}}",
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
        "{{$funcionario->emandamento}}",
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
