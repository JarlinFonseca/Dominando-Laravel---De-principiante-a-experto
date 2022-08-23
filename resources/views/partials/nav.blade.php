<nav>
        
    {{-- Ver URL --}}
    {{-- {{ dump(request()->url() )}} --}}
    {{-- Ver URL interna --}}
    {{-- {{ dump(request()->path() )}} --}}
    {{-- Comparar si estamos sobre la ruta --}}
    {{-- {{ dump(request()->routeIs('portfolio.index') )}} --}}

    <ul>
        <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
        <li class="{{ setActive('portfolio.index') }}"><a href="/portfolio">Portfolio</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
    </ul>
</nav>