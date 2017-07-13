@extends('layouts.principal')

@section('title', 'Conserto x')

@section('content_title', 'Conserto x')

@section('breadcrumbs')
    {!! Breadcrumbs::render('detalhes_conserto') !!}
@endsection

@section('css')
      <meta name="_token" content="{{ csrf_token() }}" />
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="ibox">
                <div class="ibox-title">
                    <h5></h5>
                    <div class="ibox-tools">
                        <a href="" class="btn btn-primary btn-xs">Novo conserto</a>
                    </div>
                </div><!-- /IBOX TITLE -->
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <img alt="usuário" class="img-thumbnail img-lg img-responsive" src="/media/avatars/default.jpg">
                        </div>
                    </div>
                </div>
            </div><!-- /IBOX -->
        </div><!-- /ROW -->
    </div>

@endsection

@section('scripts')
<script>


</script>


@stop