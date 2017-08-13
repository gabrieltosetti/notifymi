    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span><img alt="image" class="img-circle " width="170" height="170" src="/media/avatars/{{ Auth::user()->avatar }}"/></span>


                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->nome }}</strong></span>
                            <strong class="font-bold">{{DB::table('cargos')->
                              where('id', DB::table('usuarios')->
                              where('id', Auth::user()->id)->
                              value('permissao'))->
                              value('cargo')}}</strong>
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
                <li class="{{ Request::fullUrl() === route('usuariohome') ? 'active' : '' }}" >
                    <a href="{{ route('usuariohome') }}"><i class="fa fa-home"></i> <span class="nav-label">Página Inicial</span></a>
                </li>
                <!--
                                            CONSERTOS
                -->
                <li class="{{ Request::segment(1) === 'consertos' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-wrench"></i>
                     <span class="nav-label">Consertos</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('consertos') ? 'active' : '' }}" ><a href="{{ route('consertos') }}">Ver todos</a></li>
                        <li class="{{ Request::fullUrl() === route('novo_conserto') ? 'active' : '' }}" ><a href="{{ route('novo_conserto') }}">Novo</a></li>
                    </ul>
                </li>
                <!--/CONSERTOS-->
                <!--
                    CLIENTES
                -->
                <li class="{{ Request::segment(1) === 'clientes' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Clientes</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('clientes') ? 'active' : '' }}" ><a href="{{ route('clientes') }}">Ver todos</a></li>
                        <li class="{{ Request::fullUrl() === route('novo_cliente') ? 'active' : '' }}" ><a href="{{ route('novo_cliente') }}">Novo</a></li>
                    </ul>
                </li>

                 <!--
                     USUARIOS
                -->
                <li class="{{ Request::segment(1) === 'usuarios' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-id-card-o"></i> <span class="nav-label">Usuários</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('usuarios') ? 'active' : '' }}" ><a href="{{ route('usuarios') }}">Ver todos</a></li>
                        <li class="{{ Request::fullUrl() === route('novo_usuario') ? 'active' : '' }}" ><a href="{{ route('novo_usuario') }}">Novo</a></li>
                    </ul>
                </li>
                <!--/USUARIOS-->

                <!--
                    ASSISTENCIA
                -->
                <li class="{{ Request::segment(1) === 'assistencia' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Assistencia</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('lista_cargos') ? 'active' : '' }}" ><a href="{{ route('lista_cargos') }}">Cargos</a></li>
                        <li class="{{ Request::fullUrl() === route('lista_assistencia') ? 'active' : '' }}" ><a href="{{ route('lista_assistencia') }}"> Lista</a></li>

                    </ul>

                </li>
                <!-- /ASSISTENCIA -->
            </ul>

        </div>
    </nav>
