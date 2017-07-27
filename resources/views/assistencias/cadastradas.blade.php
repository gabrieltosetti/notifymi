@extends('layouts.principal')

@section('title', 'Assistências')

@section('content_title', 'Assistências cadastradas')



@section('css')
<meta name="_token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/aaa/buttons.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/jQueryUI/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/dataTables/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/footable/footable.core.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
@stop

@section('content')
<div class="ibox-content">
<input type="text" class="form-control input-sm m-b-xs" id="filtro"
placeholder="Procurar na lista">

<table class="footable table table-stripped" data-page-size="25" data-filter=#filtro>
  <thead>
   <tr>
     <th>ID</th>
     <th>Nome</th>
     <th>Especialidade</th>
     <th>Email de contato</th>
     <th>Telefone</th>
     <th>Telefone 2</th>
     <th>Cidade</th>

     <th width="170">Operações</th>
   </tr>
 </thead>
  <tbody>
    @foreach($assistencias as $assistencia)
    <div class="row">
      <tr class="lista_assistencia">
        <a class="open-modal" value="{{$assistencia->id}}">
          <div class="row">
            <td>       <!-- ID -->
              #{{$assistencia->id}}
            </td>

            <td id="assistencia-nome-{{$assistencia->id}}" >
              <h3><strong  id="assistencia-nome-{{$assistencia->id}}">{{$assistencia->nome}}</strong></h3>      <!-- NOME -->
            </td>
            <td>
              {{$assistencia->especialidade}}       <!--  Email-->
            </td>
            <td>
              {{$assistencia->email}}       <!--  Email-->
            </td>
            <td>
              {{$assistencia->telefone1}}      <!-- Telefone 1-->
            </td>

            <td>
              {{$assistencia->telefone2}}        <!--Telefone 2  -->
            </td>
            <td>
              {{$assistencia->cidade}}       <!-- cidade -->
            </td>

            <td width="170">
              <div class="col-xs-6 col-sm-6 hidden-xs">
                <button title="Ver mais detalhes" class="btn btn-xs btn-info btn-circle fa fa-search open-modal" value="{{$assistencia->id}}"></button>
              </div>





              <!--CELULAR-->
              <div class="col-xs-4 col-sm-4 visible-xs-block">
                <form class="form-deletar" value="{{$assistencia->id}}">
                  <button class="btn btn-danger btn-circle btn-lg" type="submit"><i class="fa fa-times"></i></button>
                </form>
              </div>
              <div class="col-xs-8 col-sm-3 p-w-xs visible-xs-block">
                <a class="btn btn-success btn-circle btn-lg open-modal"> "><i class="fa fa-search" value="{{$assistencia->id}}"></i></a>

                <a class="btn btn-primary btn-circle btn-lg" href="{{ route('edita_assistencia', ['id' => $assistencia->id]) }}"><i class="fa fa-pencil"></i></a>
              </div>
            </td>
          </div>
        </a>

      </tr>
    </div>
  </div>
  @endforeach
  <!--MODAL-->
  <div class="modal inmodal" id="modal-detalhes" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content animated bounceInRight">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <img alt="image" class="img-circle img-responsive img-lg center-block" src="/media/avatars/{{$assistencia->avatar}}">
          <h4 class="modal-title" id="modal-titulo"></h4>
          <small class="font-bold" ></small>
        </div>
        <div class="modal-body">
          <div class="form-horizontal">
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Email</label>
                  <p class="form-control-static" id="modal-email"></p>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Site</label>
                  <p class="form-control-static" id="modal-site"></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Tel 1</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-tel1"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Celular</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-cel"></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Tel 2</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-tel2"></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Especialidade</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-especialidade"></p>
                  </div>
                </div>
              </div>
            </div>
            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Cidade</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-cidade"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Bairro</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-bairro"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Rua</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-rua"></p>
                  </div>
                </div>

              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Número</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-numero"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Comple.</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-comp"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Maps:</label>
                  <div class="col-sm-9">  <!-- inserir maps aqui -->
                    <a class="btn btn-w-m btn-success fa fa-map-marker" onclick="window.open('https://www.google.com.br/maps/place/ {{$assistencia->cidade}} {{$assistencia->bairro}} {{$assistencia->rua}} {{$assistencia->numero}}')" href="#">Abrir no Maps</a>
                  </div>
                </div>
              </div>
            </div>
            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="col-sm-3 col-xs-12 control-label">Descrição</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" id="modal-descricao"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!--/modal content-->
    </div>
  </div>
  <!--/MODAL-->

</div>
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
<script type="text/javascript" src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="js/plugins/footable/footable.all.min.js"></script>
<script>

$(document).ready(function(){
  var url = "/assistencias";
  /*DETALHES*/
  $(".lista_assistencia").on("click", ".open-modal", function () {
    var assistencia_id = $(this).attr('value');
    console.log("assistencia id: "+assistencia_id);

    $.get(url + '/detalhes/' + assistencia_id,function (data) {
      //success data
      console.log(data);
      $('#modal-titulo').text(data.nome);
      $('#modal-especialidade').text(data.especialidade);
      $('#modal-email').text(data.email);
      $('#modal-site').text(data.site);
      $('#modal-tel1').text(data.telefone1);
      $('#modal-tel2').text(data.telefone2);
      $('#modal-cel').text(data.celular);
      $('#modal-cidade').text(data.cidade);
      $('#modal-numero').text(data.numero);
      $('#modal-bairro').text(data.bairro);
      $('#modal-comp').text(data.completemento);
      $('#modal-rua').text(data.rua);
      $('#modal-descricao').text(data.descricao);
      $('#modal-detalhes').modal('show');
    })
  });
  /* /DETALHES*/

  /*DELETAR CLIENTE*/
  $('form.form-deletar').on("submit", function (event) {

    var assistencia_id = $(this).attr('value');
    var assistencia_nome = $("#assistencia-nome-"+assistencia_id).text();


    swal({
      title: 'Deletar?',
      text: 'Tem certeza que deseja excluir '+'#'+assistencia_id+assistencia_nome+'?',
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
            url: url + '/remove/' + assistencia_id,
            success: function (data) {
              //console.log(data);

              $("#assistencia-" + assistencia_id).remove();
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
        title: 'Assistencia deletado!',
      })
    });
    event.preventDefault();
  });
  /*/DELETAR CLIENTE*/
}); /* /DOCUMENT READY*/
$(document).ready(function() {

  $('.footable').footable();


});


</script>
@stop
