@extends('layout')


@section('title', 'Contact')

@section('content')

<h1>CONTACT</h1>

<form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="text" placeholder="Nombre..." required><br>
        <input type="email" name="email" placeholder="Email..." required><br>
        <input type="text" name="subject" placeholder="Asunto..." required><br>
        <textarea name="content" placeholder="Mensaje..." required></textarea><br>
        <button>Enviar</button>
</form>

@endsection