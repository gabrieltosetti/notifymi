@extends('layouts.principal')

@section('title', 'Novo Conserto')

@section('content_title', 'Novo Conserto')

@section('breadcrumbs')
{!! Breadcrumbs::render('novo_conserto') !!}
@endsection

@section('css')
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">

@stop

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row"> <!--row 1-->
    <div class="col-xs-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Cadastro de novo conserto</h5>
        </div> <!--/ibox title-->
        <div class="ibox-content">
          <form class="form-horizontal" action="{{ route('novo_conserto_post') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="1" name="id_assistencia" />
            @if($errors->any())
            <div class="row">
              <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                Porfavor, corrija o(s) erro(s) abaixo !
              </div>
            </div>
            @endif
            <div class="row">
              <div class="col-xs-12"><p>Informações básicas sobre o novo conserto.</p></div>
            </div>
            <div class="row"> <!--row 2-->
              <div class="col-xs-12 col-sm-6 b-r">
                <!--TITULO-->
                <div class="form-group  {{ $errors->has('cpf') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="cpf">Título</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="titulo" placeholder="" value="{{ old('titulo') }}" id="titulo">
                    <span class="help-block"><?php echo $errors->first('titulo'); ?></span>
                  </div>
                </div>
                      <!-- FIM TITULO -->
      <!-- MODELO -->
                <div class="form-group  {{ $errors->has('modelo') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="nome">Modelo</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="modelo" value="{{ old('modelo') }}" id="modelo" maxlength="50">
                    <span class="help-block"><?php echo $errors->first('modelo'); ?></span>
                  </div>
                </div>
      <!-- FIM DEFEITO -->
              </div> <!--/col xs 12-->
              <div class="col-xs-12 col-sm-6">
                <!--DEFEITO-->
                <div class="form-group  {{ $errors->has('defeito') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="defeito">Defeito:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Exemplo: Tela quebrada" name="defeito"  value="{{ old('defeito') }}" id="defeito">
                    <span class="help-block"><?php echo $errors->first('defeito'); ?></span>
                  </div>
                </div>
                      <!-- FIM DEFEITO -->
      <!--DETALHES  -->
                <div class="form-group {{ $errors->has('complemento') ? 'has-error' : ''}}">
                  <label for="complemento" class="col-sm-3 control-label">Detalhes:</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"  placeholder="Opcional" name="complemento" id="detalhes"  maxlength="255">{{ old('detalhes') }}</textarea>
                    <span class="help-block"><?php echo $errors->first('detalhes'); ?></span>
                  </div>
                </div>
                      <!-- FIM DETALHES -->

              </div> <!--/col xs 12-->
            </div> <!--/row 2-->


            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->
            <div class="row">
              <div class="col-xs-12"><p>Dados HUE</p></div>
            </div>
            <div class="row"> <!--row 3-->
              <div class="col-xs-12 col-sm-6 b-r">
                <div class="form-group  {{ $errors->has('tecnico') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="tecnico">Técnico</label>
                  <div class="col-sm-9">
                    <select id="select-funcionarios" data-placeholder="Adicionar responsável" class="chosen-select form-control" name="tecnico" value="{{ old('tecnico') }}" style=" height:50px; width:350px;"></select>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6">
                <div class="form-group  {{ $errors->has('cliente') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="cliente">Cliente</label>
                  <div class="col-sm-9">
                    <select id="select-cliente" data-placeholder="Adicionar cliente." class="chosen-select form-control" name="cliente" style=" height:50px; width:350px;"></select>
                      <span class="help-block"><?php echo $errors->first('cliente'); ?></span>
                  </div>
                </div>
              </div>
            </div> <!--/row 3-->
            <!--divisoria--><div class="hr-line-dashed"></div> <!--divisoria-->

            <div class="row">

            </div>
            <div class="row"> <!--row 7-->
              <div class="col-xs-12">
                <button class="btn btn-primary" type="submit">Criar</button>
                <a class="btn btn-danger" href="{{ route('consertos') }}">Cancelar</a>
              </div>
            </div> <!--/row 7-->

          </form>
        </div> <!--/ibox content-->
      </div> <!--/ibox-->
    </div><!--/col xs 12-->
  </div> <!--/row 1-->
</div> <!--/content-->
@endsection

@section('scripts')
<!-- Input Mask-->
<script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/chosen/chosen.jquery.min.js') }}"></script>



<script>

$(document).ready(function(){
  iniciarMultiUsuario();

  $(".chosen-select").chosen({
      no_results_text: "Oops, não encontrado!"
  });
});
function iniciarMultiUsuario(){
   var funcionarios = <?php echo json_encode($funcionarios); ?>;

   var clientes = <?php echo json_encode($clientes); ?>;


   $.each(funcionarios, function (i, nome) {
     $('#select-funcionarios').append($('<option>', {
         value: nome,
         text : nome
     }));
   });
   $.each(clientes, function (i, nome) {
       $('#select-cliente').append($('<option>', {
           value: nome,
           text : nome
       }));
   });

}
</script>
@stop
