@extends('layouts.principal')

@section('title', 'Novo Conserto')

@section('content_title', 'Novo Conserto')

@section('breadcrumbs')
{!! Breadcrumbs::render('novo_conserto') !!}
@endsection

@section('css')
<link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/jQueryUI/jquery-ui.css') }}">

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
                <div class="form-group  {{ $errors->has('titulo') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="titulo">Título</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="titulo" placeholder="" value="{{ old('titulo') }}" id="titulo">
                    <span class="help-block"><?php echo $errors->first('titulo'); ?></span>
                  </div>
                </div>
                <!-- FIM TITULO -->
                <!-- MODELO -->
                <div class="form-group  {{ $errors->has('modelo') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="modelo">Modelo</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="modelo" value="{{ old('modelo') }}" id="modelo" maxlength="50">
                    <span class="help-block"><?php echo $errors->first('modelo'); ?></span>
                  </div>
                </div>
                <div class="form-group  {{ $errors->has('data_entrega') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="data_entrega">Data de entrega:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control datepicker" name="data_entrega" value="{{ old('data_entrega') }}" id="data_entrega" maxlength="13">
                    <span class="help-block"><?php echo $errors->first('data_entrega'); ?></span>
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
                <div class="form-group {{ $errors->has('orcamento') ? 'has-error' : ''}}">
                  <label for="orcamento" class="col-sm-3 control-label">Valor:</label>
                  <div class="col-sm-9">
                    <input type ="text" class="form-control"  placeholder="" name="orcamento" id="orcamento"  maxlength="14">{{ old('orcamento') }}</input>
                    <span class="help-block"><?php echo $errors->first('orcamento'); ?></span>
                  </div>
                </div>

                <div class="form-group {{ $errors->has('observacao') ? 'has-error' : ''}}">
                  <label for="observacao" class="col-sm-3 control-label">Observação:</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"  placeholder="Breve descrição do problema." name="observacao" id="observacao"  maxlength="255">{{ old('observacao') }}</textarea>
                    <span class="help-block"><?php echo $errors->first('observacao'); ?></span>
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
                <!-- INICIO FORMGROUP FUNCIONARIO  -->
                <div class="form-group {{ $errors->has('id_usuario') ? 'has-error' : ''}}">
                  <label for="id_usuario" class="col-sm-3 control-label">Responsável:</label>
                  <div class="col-sm-9">
                    <select placeholder="placeholder" class="form-control"  maxlength="255" name="id_usuario">
                      @foreach($funcionarios as $funcionario)
                      <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                      @endforeach
                    </select>
                    <span class="help-block"><?php echo $errors->first('id_usuario'); ?></span>
                  </div>
                </div>

                <div class="form-group {{ $errors->has('id_assistencia') ? 'has-error' : ''}}">
                  <label for="id_assistencia" class="col-sm-3 control-label">ID Assistência:</label>
                  <div class="col-sm-9">
                    <select placeholder="placeholder" class="form-control"  maxlength="255" name="id_assistencia">
                      <option value="{{$funcionario->id_assistencia}}">{{$funcionario->id_assistencia}}</option>
                    </select>
                    <span class="help-block"><?php echo $errors->first('id_assistencia'); ?></span>
                  </div>
                </div>
      <!--  STATUS-->
                <div class="form-group  {{ $errors->has('status') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="status">Status:</label>
                  <div class="col-sm-9">
                    <select placeholder="placeholder" class="form-control"  name="status">
                      <option value="novo">Novo</option>
                      <option value="neabertura">Reabertura</option>
                    </select>
                    <span class="help-block"><?php echo $errors->first('status'); ?></span>
                  </div>
                </div>
                      <!-- FIM STATUS -->
              </div>
              <!-- FIM FORMGROUP FUNCIONARIO -->

              <!-- FORMGROUP CLIENTE -->
              <div class="col-xs-12 col-sm-6">
                <div class="form-group  {{ $errors->has('id_cliente') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="id_cliente">Cliente:</label>
                  <div class="col-sm-9">
                    <select placeholder="placeholder" class="form-control"  name="id_cliente">
                      @foreach($clientes as $cliente)
                      <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                      @endforeach
                    </select>
                    <span class="help-block"><?php echo $errors->first('id_cliente'); ?></span>
                  </div>
                </div>
                <!--  Prioridade -->
                <div class="form-group  {{ $errors->has('prioridade') ? 'has-error' : ''}}">
                  <label class="col-sm-3 control-label" for="prioridade">Prioridade:</label>
                  <div class="col-sm-9">
                    <select placeholder="placeholder" class="form-control"  name="prioridade">
                      <option value="Baixa">Baixa</option>
                      <option value="Média">Média</option>
                      <option value="Alta">Alta</option>
                    </select>
                    <span class="help-block"><?php echo $errors->first('prioridade'); ?></span>
                  </div>
                </div>

              </div>
            </div>

            <div class="row"> <!--row 7-->
              <div class="col-xs-12">
                <button class="btn btn-primary" id="submit" type="submit">Criar</button>
                <a class="btn btn-danger" href="{{ route('novo_conserto_post') }}">Cancelar</a>
              </div>
            </div>
          </form>

        </div> <!--/ibox content-->
      </div> <!--/ibox-->
    </div><!--/col xs 12-->
  </div> <!--/row 1-->
</div> <!--/content-->
@endsection

@section('scripts')
<!-- Input Mask-->
<script type="text/javascript" src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/aaa/dataTables/jquery-ui.js') }}"></script>



<script>

$( function() {
  $( '.datepicker' ).datepicker();
} );

</script>
@stop
