<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">


                  <span><img alt="image" class="img-circle" src="/media/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px;"/></span>





                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong></span>


<!-- preciso melhorar isso aqui-->


<?php $permissao = Auth::user()->permissao?>
<!-- preciso melhorar isso aqui-->
@if($permissao == 0)
<i class="fa fa-user-o"></i>  <strong class="font-bold"> Cliente</strong>
@endif

@if($permissao == 1)
<i class="fa fa-cog"></i><strong class="font-bold"> Técnico</strong>
@endif

@if($permissao == 2)
<i class="fa fa-address-card-o"></i><strong class="font-bold"> Gerente</strong>
@endif

@if($permissao == 3)
<i class="fa fa-briefcase"></i><strong class="font-bold"> Dono</strong>
@endif

@if($permissao == 4)
<i class="fa 

<!--  -->


                      </a>

                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ route('perfil') }}">Perfil</a></li>
                        <li><a href="contacts.html">Contatos</a></li>
                        <li><a href="mailbox.html">Caixa de Mensagens</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
                <div class="logo-element">
            <span><img alt="image" class="img-circle" src="/img/logob.png" style="width:50px; height:50px;"/></span>
                </div>
            </li>
            <li class="{{ Request::fullUrl() === route('home') ? 'active' : '' }}" >
                <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Página Inicial</span></a>
            </li>
            <!--
                                        CONSERTOS
            -->
            <li class="{{ Request::segment(1) === 'consertos' ? 'active' : '' }}" >
                <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Consertos</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ Request::fullUrl() === route('consertos') ? 'active' : '' }}" ><a href="{{ route('consertos') }}">Ver todos</a></li>

                </ul>
            </li>
            <!--/CONSERTOS-->
            <!--
                                        CLIENTES
            -->


                                    <!--    USUARIOS
            -->

            </li>
            <!--/USUARIOS-->
        </ul>

    </div>
</nav>
