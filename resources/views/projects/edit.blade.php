@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

<h1>Editar proyecto</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>                       
        @endforeach
    </ul>
@endif

<form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf @method('PATCH')
        <label for="title">Título del proyecto</label>
    <p>   
        <input type="text" name="title" value="{{ old('title', $project->title)  }}">
    </p>

        <label for="url">URL del proyecto</label>
    <p>
        <input type="text" name="url" value="{{ old('url', $project->url) }}">
    </p>

     <label for="description">Descripción del proyecto</label>
    <p>
        <textarea name="description">{{ old('description', $project->description) }}</textarea>
    </p>
    <br>
    <button>Actualizar</button>
</form>

@endsection