
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            @if(Auth::user())
                @if(Auth::user()->userType==2)
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/"><i class="fas fa-home"></i> Inicio </a></li>
                    <li class=" "><a href="/user"><i class="fas fa-cogs"></i> Administrar</a></li>
                    <li class=" "><a href="/statistics"><i class="fas fa-chart-bar"></i> Estadísticas</a></li>
                </ul>
                

                  @elseif(Auth::user()->userType==3)
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/"><i class="fas fa-home"></i> Inicio </a></li>
                    <li class=" "><a href="/user"><i class="fas fa-cogs"></i> Administrar</a></li>
                    <li class=" "><a href="/statistics"><i class="fas fa-chart-bar"></i> Estadísticas</a></li>
                    <li class=" "><a href="/file/{{Auth::user()->id}}"><i class="fas fa-chart-bar"></i> Mis Estadísticas</a></li>
                    <li class=" "><a href="/pages.projects/{{Auth::user()->id}}"><i class="fas fa-file-contract"></i> Mis Proyectos</a></li>
                </ul>
                  
                @elseif(Auth::user()->userType==1)
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/"><i class="fas fa-home"></i> Inicio </a></li>
                    <li class=" "><a href="/file/{{Auth::user()->id}}"><i class="fas fa-chart-bar"></i> Mis Estadísticas</a></li>
                    <li class=" "><a href="/pages.projects/{{Auth::user()->id}}"><i class="fas fa-file-contract"></i> Mis Proyectos</a></li>
                </ul>  
                @endif     

            @else(!Auth::user()) 
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/"><i class="fas fa-home"></i> Inicio</a></li>
                </ul>     
            @endif
            
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li>
                        <a href="{{ route('social.oauth', 'google') }}"><i class="fas fa-sign-in-alt"></i>Iniciar Sesión</a>
                    </li>
                @else
                     <li class=" "><a href="/user/{{Auth::user()->id}}"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>