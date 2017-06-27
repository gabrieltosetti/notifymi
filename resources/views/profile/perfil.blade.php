@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="ibox-content">
          <img class="img-circle" src="/media/{{ $users ->avatar }}" style="float:left;">
          <h2><b>  {{$users->name }}</b></h2>
        </div>
        </div>
    </div>
</div>
@endsection
