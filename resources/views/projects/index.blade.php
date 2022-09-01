@extends('layout')

@section('title', 'Portfolio')

@section('content')

<h1>{{ __('Projects') }}</h1>
<a href="{{ route('projects.create') }}">Crear proyecto</a>

    <ul>

        {{-- De esta forma se haria con PHP --}}
        {{--  
              <?php foreach ($portfolio as $portfolioItem): ?>
             <li> {{ $portfolioItem['title'] }} </li>
        <?php  endforeach ?>
            
            --}}

     
            
             {{-- De esta forma se haria con BLADE -Laravel  --}}
        @forelse($projects as $project)
            <li>  <a href=" {{ route('projects.show', $project) }}"> {{ $project->title }}</a>  </li> 
                {{--  <li> {{ $project->title }} <br><small>{{ $project->description }}  --}}
                  {{--   <br>{{ $project->created_at->format('Y-m-d') }} 
                    <br>{{ $project->created_at->diffForHumans() }} --}}      
                {{-- </small>  <small> {{ $loop->last ? 'Es el último': '' }}</small>  </li>  --}}
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $projects->links() }}
      
    </ul>
   

@endsection