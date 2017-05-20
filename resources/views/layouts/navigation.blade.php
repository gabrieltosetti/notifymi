    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('/media/profile_small.jpg') }}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="{{ Request::fullUrl() === route('home') ? 'active' : '' }}" >
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Página Inicial</span></a>
                </li>
                <!--
                                            CONSERTOS
                -->
                <li class="{{ Request::segment(1) === 'consertos' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Concertos</span> <span class="fa arrow"></span></a>
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
                <!--/CLIENTES-->
                 <!--
                                            FUNCIONARIOS
                -->
                <li class="{{ Request::segment(1) === 'funcionarios' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Funcionarios</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('funcionarios') ? 'active' : '' }}" ><a href="{{ route('funcionarios') }}">Ver todos</a></li>
                        <li class="{{ Request::fullUrl() === route('novo_funcionario') ? 'active' : '' }}" ><a href="{{ route('novo_funcionario') }}">Novo</a></li>
                    </ul>
                </li>
                <!--/FUNCIONARIOS-->
            </ul>

        </div>
    </nav>