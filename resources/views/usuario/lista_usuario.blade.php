@extends('layouts.principal')

@section('title', 'Usuários')

@section('content_title', 'Lista de Usuários')

@section('breadcrumbs')
    {!! Breadcrumbs::render('usuarios') !!}
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-lg-4">
                        <div class="contact-box">
                            <a href="profile.html">
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <img alt="image" class="img-circle m-t-xs img-responsive center-block" src="img/a2.jpg">
                                        <div class="m-t-xs font-bold">Graphics designer</div>
                                    </div>
                                </div>
                                <div class="col-sm-8 hidden-xs">
                                    <h3><strong>John Smith</strong></h3>
                                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                                <div class="col-sm-8 text-center visible-xs-block">
                                    <h3><strong>John Smith</strong></h3>
                                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div> <!--/col lg 4--> 
    <!--/<ROW--></div>
            </div>
@endsection
