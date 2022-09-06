@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-12 col-lg-6 ">
            {{-- <h1>{{ __('Home') }}</h1> --}}
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum 
                veritatis expedita repellendus quod? Cum deserunt sapiente tempore sunt animi facilis quaerat! 
                A earum aliquam ab harum. Cum ratione natus temporibus.</p>

                <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>

        <div class="col-12 col-lg-6 ">
            <img  class="img-fluid mb-4 mt-4" src="/img/home.svg" alt="Desarrollo Web">

        </div>
    </div>
</div>


{{-- @auth
{{ auth()->user()->name }}
@endauth --}}


{{-- <h1>ESTE ES EL HOME</h1>

    Bienvenid@ <?php echo $nombre ?? "Invitado"?> 
    Bienvenid@ {{ $nombre ?? "Invitado" }} --}}

@endsection