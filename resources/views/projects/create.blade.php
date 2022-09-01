@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

<h1>Crear nuevo proyecto</h1>

<form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="title">Título del proyecto</label>
    <p>   
        <input type="text" name="title">
    </p>

        <label for="url">URL del proyecto</label>
    <p>
        <input type="text" name="url">
    </p>

     <label for="description">Descripción del proyecto</label>
    <p>
        <textarea name="description"></textarea>
    </p>
    <br>
    <button>Guardar</button>
</form>

@endsection