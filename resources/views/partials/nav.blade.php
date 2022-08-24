<nav>
        
    {{-- Ver URL --}}
    {{-- {{ dump(request()->url() )}} --}}
    {{-- Ver URL interna --}}
    {{-- {{ dump(request()->path() )}} --}}
    {{-- Comparar si estamos sobre la ruta --}}
    {{-- {{ dump(request()->routeIs('portfolio.index') )}} --}}

    <ul>
        <li class="{{ setActive('home') }}"><a href="/">@lang('Home')</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">@lang('About')</a></li>
        <li class="{{ setActive('portfolio.index') }}"><a href="/portfolio">@lang('Portfolio')</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">@lang('Contact')</a></li>
    </ul>
</nav>