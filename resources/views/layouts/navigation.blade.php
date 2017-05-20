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
                <li class="{{ Request::path() === 'home' ? 'active' : '' }}" >
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Página Inicial</span></a>
                </li>
                <li class="{{ Request::segment(1) === 'consertos' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Concertos</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::path() === 'consertos' ? 'active' : '' }}" ><a href="{{ route('consertos') }}">Ver todos</a></li>
                        <li class="{{ Request::path() === 'consertos/novo' ? 'active' : '' }}" ><a href="{{ route('novo_conserto') }}">Novo</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'clientes' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Clientes</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::path() === 'clientes' ? 'active' : '' }}" ><a href="{{ route('clientes') }}">Ver todos</a></li>
                        <li class="{{ Request::path() === 'clientes/novo' ? 'active' : '' }}" ><a href="{{ route('novo_cliente') }}">Novo</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>