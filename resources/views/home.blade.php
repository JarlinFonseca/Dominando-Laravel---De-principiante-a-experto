@extends('layout')

@section('title', 'Home')

@section('content')

<h1>{{ __('Home') }}</h1>

{{-- <h1>ESTE ES EL HOME</h1>

    Bienvenid@ <?php echo $nombre ?? "Invitado"?> 
    Bienvenid@ {{ $nombre ?? "Invitado" }} --}}

@endsection