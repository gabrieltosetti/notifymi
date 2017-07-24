@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Consertos')



@section('css')
<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/buttons.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/jQueryUI/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/dataTables/datatables.min.css') }}">

@stop


@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="ibox">
      <div class="ibox-title">
        <h5>Lista de Consertos</h5>
        <div class="ibox-tools">
          <a href="" class="btn btn-primary btn-xs">Novo conserto</a>
        </div>
      </div>
      <div class="ibox-content">
        <!-- LINHA DE PESQUISA -->
        <div class="m-b-lg">
          <div class="input-group">


          </div>

        </div>

          <tr>
            <td>Data Inicial:</td>
            <td><input name="min" id="min" type="text"></td>
          </tr>
          <tr>
            <td>Data Final:</td>
            <td><input name="max" id="max" type="text"></td>
          </tr>

        <!-- /LINHA DE PESQUISA -->
        <table  class="table table-striped table-bordered table-hover issue-tracker dataTables-conserto" id="lista_cliente" cellspacing="0">


          <thead>
            <tr>
              <th>ID</th>
              <th>Descrição</th>
              <th>Atribuído</th>
              <th>Cliente</th>
              <th>Criado</th>
            </tr>
          </thead>
          <tbody>
            <!-- ADDED -->
            <tr>
              <td class="issue-id"> <!-- ID -->
                #1
              </td>
              <td class="issue-info"> <!-- DESCRIÇÃO -->
                <span class="label label-primary">Aberto</span> <a href="#">Título do conserto</a>
                <small>
                  Aqui fica a breve descrição.
                </small>
              </td>
              <td><!-- ATRIBUIDO -->
                <a href="#">Gabriel Tosetti</a>
              </td>
              <td> <!-- CLIENTE -->
                <a href="#">Matheus Luz</a>
              </td>
          <td>2017/07/17</td>
            </tr>
            <!-- /ADDED -->
            <!-- PENDENTE -->
            <tr>
              <td class="issue-id"> <!-- ID -->
                #2
              </td>
              <td class="issue-info"> <!-- DESCRIÇÃO -->
                <span class="label label-warning">Pendente</span> <a href="#">Título do conserto</a>
                <small>
                  Aqui fica a breve descrição.
                </small>
              </td>
              <td><!-- ATRIBUIDO -->
                <a href="#">Gabriel Tosetti</a>
              </td>
              <td> <!-- CLIENTE -->
                <a href="#">Matheus Luz</a>
              </td>
              <td>2017/07/16</td>
            </tr>
            <!-- /PENDENTE -->
            <!-- PENDENTE -->
            <tr>
              <td class="issue-id"> <!-- ID -->
                #3
              </td>
              <td class="issue-info"> <!-- DESCRIÇÃO -->
                <span class="label label-success">Em espera</span> <a href="#">Título do conserto</a>
                <small>
                  Aqui fica a breve descrição.
                </small>
              </td>
              <td><!-- ATRIBUIDO -->
                <a href="#">Gabriel Tosetti</a>
              </td>
              <td> <!-- CLIENTE -->
                <a href="#">Matheus Luz</a>
              </td>
              <td>2017/07/15</td>
            </tr>
            <!-- /PENDENTE -->
            <!-- FECHADO -->
            <tr>
              <td class="issue-id"> <!-- ID -->
                #4
              </td>
              <td class="issue-info"> <!-- DESCRIÇÃO -->
                <span class="label label-default">Fechado</span> <a href="#">Título do conserto</a>
                <small>
                  Aqui fica a breve descrição.
                </small>
              </td>
              <td><!-- ATRIBUIDO -->
                <a href="#">Gabriel Tosetti</a>
              </td>
              <td> <!-- CLIENTE -->
                <a href="#">Matheus Luz</a>
              </td>
              <td>2017/07/14</td>
            </tr>
            <!-- /FECHADO -->
            <!-- CANCELADO -->
            <tr>
              <td class="issue-id"> <!-- ID -->
                #5
              </td>
              <td class="issue-info"> <!-- DESCRIÇÃO -->
                <span class="label label-danger">Cancelado</span> <a href="#">Título do conserto</a>
                <small>
                  Aqui fica a breve descrição.
                </small>
              </td>
              <td><!-- ATRIBUIDO -->
                <a href="#">Gabriel Tosetti</a>
              </td>
              <td> <!-- CLIENTE -->
                <a href="#">Matheus Luz</a>
              </td>
              <td>2017/07/13</td>

            </tr>
            <!-- /CANCELADO -->
          </tbody>
<tfoot><tr></tr></tfoot>
        </table>
      </div>


    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="js/plugins/aaa/jszip/jszip.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/pdfmake.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/vfs_fonts.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/dataTables.buttons.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.html5.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.print.js"></script>

<script type="text/javascript" src="js/plugins/aaa/dataTables/jquery-ui.js"></script>


<script>

const customizePrint = (window) =>
  $(window.document.body)
    .addClass('white-bg')
    .css('font-size', '10px')
    .find('table')
    .addClass('compact')
    .css('font-size', 'inherit');

$(document).ready( () =>
  $('.dataTables-conserto').DataTable({
    pageLength: 25,
    responsive: true,
    dom: '<"html5buttons"B>lTfgitp',
    buttons: [
      { extend: 'copy' },
      { extend: 'csv' },
      { extend: 'excel', title: 'Lista Consertos' },
      { extend: 'pdf', title: 'Lista Consertos' },
      { extend: 'print', customize: customizePrint }
    ]
  })
);

$(document).ready(function(){
  $.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
      var min = $('#min').datepicker("getDate");
      var max = $('#max').datepicker("getDate");



      var conserto = new Date(data[4]);

      var startDate = conserto;
      if (min == null && max == null) { return true; }
      if (min == null && startDate <= max) { return true;}
      if(max == null && startDate >= min) {return true;}
      if (startDate <= max && startDate >= min) { return true; }
      return false;
    }
  );
  $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
  $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
  var table = $('#lista_conserto').DataTable();
  // Event listener to the two range filtering inputs to redraw on input
  $('#min, #max').change(function () {
    table.draw();
  });
});

</script>


@stop
