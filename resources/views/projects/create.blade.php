@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

<h1>Crear nuevo proyecto</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>                       
        @endforeach
    </ul>
@endif

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