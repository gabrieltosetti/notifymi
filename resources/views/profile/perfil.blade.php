@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="ibox-content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <div align="center" >
          <img class="img-circle" src="/media/{{ $users ->avatar }}" style="padding-bottom:20px; width:350px; height:350px" >
        </div>

        </div>
        <div class="col-xs-10 col-sm-6 b-r">
        <b>Nome:</b>  {{$users->email }}

        </div>
        <div class="col-xs-11 col-sm-6">
        <b>Email:</b>  {{$users->email }}

        </div>
        <div class="col-xs-12 col-sm-6 b-r">
        <b>Telefone:</b>  {{$users->email }}

        </div>
        <div class="col-xs-13 col-sm-6">
        <b>Cargo:</b>  {{$users->email }}

        </div>
        <div class="col-xs-14 col-sm-6 b-r">
            <b>Celular:</b>  {{$users->email }}

        </div>
        <div class="col-xs-14 col-sm-6 b-r">
          <form enctype="multipart/form-data" action="/profile" method="post">
            <label>Alterar Perfil</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-primary "


        </div>


    </div>
</div>


@endsection
