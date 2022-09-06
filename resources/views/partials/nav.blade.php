<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">


    <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name') }}
            </a>


            <button class="navbar-toggler" type="button" 
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" 
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
                
            {{-- Ver URL --}}
            {{-- {{ dump(request()->url() )}} --}}
            {{-- Ver URL interna --}}
            {{-- {{ dump(request()->path() )}} --}}
            {{-- Comparar si estamos sobre la ruta --}}
            {{-- {{ dump(request()->routeIs('portfolio.index') )}} --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
                    <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
                    <li class="nav-item"><a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
                    <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
                
                    {{-- Invitado, si no ha iniciado sesión muestra el link del Login sino lo oculta 
                        Si no hay un usuario autenticado mostramos el link del login , caso contrario;
                        en el caso de que este autenticado mostrar el link para cerrar sesión.
                        --}}
                    @guest
                        <li class="nav-item"><a class="nav-link {{ setActive('login')}}" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link {{ setActive('register')}}" href="{{ route('register') }}">Registro</a></li>
                    @else
                        <li class="nav-item">
                            <a  class="nav-link" href="#"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar sesión</a>
                        </li>
                    @endguest
                </ul>
            </div>

</div>


</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>