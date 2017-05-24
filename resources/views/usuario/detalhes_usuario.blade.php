@extends('layouts.principal')

@section('title', 'Detalhes Usuário')

@section('content_title', 'Lista de Usuários')

@section('breadcrumbs')
    {!! Breadcrumbs::render('usuarios') !!}
@endsection

@section('content')
    detalhes usuario
@endsection