<nav>
        
    {{-- Ver URL --}}
    {{-- {{ dump(request()->url() )}} --}}
    {{-- Ver URL interna --}}
    {{-- {{ dump(request()->path() )}} --}}
    {{-- Comparar si estamos sobre la ruta --}}
    {{-- {{ dump(request()->routeIs('portfolio.index') )}} --}}

    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('Home')</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('About')</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">@lang('Projects')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('Contact')</a></li>
       
        {{-- Invitado, si no ha iniciado sesión muestra el link del Login sino lo oculta 
            Si no hay un usuario autenticado mostramos el link del login , caso contrario;
            en el caso de que este autenticado mostrar el link para cerrar sesión.
            --}}
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li>
                <a href="#"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a>
            </li>
        @endguest
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>