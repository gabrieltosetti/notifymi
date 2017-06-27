@extends('layouts.principal', ['breadcrumb' => 'false'])

@section('content_title', 'Detalhes Usuário')

@section('css')
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/plugins/dropzone/basic.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/plugins/codemirror/codemirror.css') }}" rel="stylesheet">-->
@stop

@section('title', 'Detalhes')
<!--ACHO QUE A HOME NAO DEVERIA TER OS BREADCRUMBS E SER PERSONALIZADA COMO UMA DASHBOARD...-->
@section('content')

        oi

@endsection

@section('scripts')
<!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
@stop
