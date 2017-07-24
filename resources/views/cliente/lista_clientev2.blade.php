@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Clientes')



@section('css')
<meta name="_token" content="{{ csrf_token() }}" />
<link href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/buttons.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/jQueryUI/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/dataTables/datatables.min.css') }}">
@stop

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
  <table  class="table table-striped table-bordered table-hover issue-tracker dataTables-conserto" id="lista_cliente" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Foto</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Celular</th>

        <th>Operações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clientes as $cliente)
      <tr id="cliente-{{$cliente->id}}">

        <td class="cliente-id"> <!-- ID -->
          {{$cliente->id}}
        </td>

        <td>
          <img alt="image" class="img-circle m-t-xs img-responsive center-block img-sm" src="/media/avatars/{{$cliente->avatar}}">
        </td>

        <td>    <!-- AVATAR -->
          <h3><strong id="cliente-nome-{{$cliente->id}}">{{$cliente->nome}}</strong></h3>      <!-- NOME -->
        </td>
        <td>
          {{$cliente->email}}
        </td>

        <td> <!-- CLIENTE -->
          {{$cliente->telefone}}
        </td>
        <td>
          {{$cliente->celular}}
        </td>
        <td>

          <div class="col-xs-2 col-sm-2 hidden-xs">
            <a title="Ver mais detalhes   "class="btn btn-xs btn-info btn-circle open-modal fa fa-search" value="{{$cliente->id}}"></a>
          </div>
          <div class="col-xs-2 col-sm-2 hidden-xs">
            <a title="Editar" class="btn btn-xs btn-warning btn-circle fa fa-pencil" href="{{ route('edita_cliente', ['id' => $cliente->id]) }}"></a>

          </div>
          <div class="col-xs-2 col-sm-3 hidden-xs">
            <form class="form-deletar" value="{{$cliente->id}}">
              <button title="Remover" type="submit" class="btn btn-xs btn-circle btn-danger fa fa-times"></button>
            </form>
          </div>

          <!--CELULAR-->
          <div class="col-xs-4 col-sm-4 visible-xs-block">
            <form class="form-deletar" value="{{$cliente->id}}">
              <button class="btn btn-danger btn-circle btn-lg" type="submit"><i class="fa fa-times"></i></button>
            </form>
          </div>
          <div class="col-xs-8 col-sm-3 p-w-xs visible-xs-block">
            <a class="btn btn-success btn-circle btn-lg open-modal" value="{{$cliente->id}}"><i class="fa fa-search"></i></a>

            <a class="btn btn-primary btn-circle btn-lg" href="{{ route('edita_cliente', ['id' => $cliente->id]) }}"><i class="fa fa-pencil"></i></a>
          </div>
        </td>



      </tr>
    </div>
    <div class="col-xs-6 col-sm-6 col-lg-4"  id="cliente-{{$cliente->id}}">
      <div class="row">
        <div class="col-xs-4 col-sm-4 hidden-xs">

        </div>


        <!--CELULAR-->


      </div>
    </div>
  </div> <!--/col lg 4-->
  @endforeach
  <!--MODAL-->

</tbody>
<tfoot><tr></tr></tfoot>
</table>

</div>
@endsection

@section('scripts')
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="js/plugins/aaa/jszip/jszip.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/pdfmake.js"></script>
<script type="text/javascript" src="js/plugins/aaa/pdfmake/vfs_fonts.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/dataTables.buttons.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.html5.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/buttons.print.js"></script>
<script type="text/javascript" src="js/plugins/aaa/dataTables/jquery-ui.js"></script>
<script>
$(document).ready(function(){
  var url = "/clientes";
  /*DETALHES*/
  $('#lista_cliente').on("click", ".open-modal", function () {
    var cliente_id = $(this).attr('value');
    console.log("cliente id: "+cliente_id);

    $.get(url + '/detalhes/' + cliente_id, function (data) {
      //success data
      console.log(data);
      $('#modal-titulo').text(data.nome);
      $('#modal-RG').text(data.rg);
      $('#modal-CPF').text(data.cpf);
      $('#modal-e-mail').text(data.email);
      $('#modal-celular').text(data.celular);
      $('#modal-telefone').text(data.telefone);
      $('#modal-cidade').text(data.cidade);
      $('#modal-bairro').text(data.bairro);
      $('#modal-rua').text(data.rua);
      $('#modal-numero').text(data.numero);
      $('#modal-complemento').text(data.complemento);
      $('#modal-permissao').text(data.permissao);

      $('#modal-detalhes').modal('show');
    })
  });
  /* /DETALHES*/
  /*DELETAR CLIENTE*/
  $('form.form-deletar').on("submit", function (event) {

    var cliente_id = $(this).attr('value');
    var cliente_nome = $("#cliente-nome-"+cliente_id).text();

    swal({
      title: 'Deletar?',
      text: 'Tem certeza que deseja excluir '+cliente_nome+'?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sim, deletar!',
      cancelButtonText: 'Cancelar',
      showLoaderOnConfirm: true,
      preConfirm: function () {
        return new Promise(function (resolve, reject) {
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
          });
          $.ajax({
            type: "DELETE",
            url: url + '/remove/' + cliente_id,
            success: function (data) {
              //console.log(data);

              $("#cliente-" + cliente_id).remove();
              resolve();
            },
            error: function (data) {
              console.log('Error:', data);
            }
          });
        });
      },
      allowOutsideClick: false
    }).then(function (data) {
      swal({
        type: 'success',
        title: 'Cliente deletado!',
      })
    });
    event.preventDefault();
  });
  /*/DELETAR CLIENTE*/
}); /* /DOCUMENT READY*/
</script>
@stop
