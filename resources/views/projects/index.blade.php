@extends('layout')

@section('title', 'Portfolio')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1 class="display-4 mb-0">{{ __('Projects') }}</h1>

        @auth
            <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear proyecto</a>
        @endauth
    </div>
    
    <p class="lead text-secondary">Proyectos realizados en las respectivas materias de la carrera
        de Ingenieria de Sistemas de la Universidad Francisco de Paula Santander.
    </p>



    <ul class="list-group">

        {{-- De esta forma se haria con PHP --}}
        {{--  
              <?php foreach ($portfolio as $portfolioItem): ?>
             <li> {{ $portfolioItem['title'] }} </li>
        <?php  endforeach ?>
            
            --}}

     
            
             {{-- De esta forma se haria con BLADE -Laravel  --}}
        @forelse($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">  
                <a class="d-flex justify-content-between align-items-center text-secondary" 
                href=" {{ route('projects.show', $project) }}"> 
                    <span class=" font-weight-bold"> {{ $project->title }} </span>
                    <span class="text-black-50">  {{ $project->created_at->format('d/m/Y') }}</span>
                    
                   
                </a></li> 
                {{--  <li> {{ $project->title }} <br><small>{{ $project->description }}  --}}
                  {{--   <br>{{ $project->created_at->format('Y-m-d') }} 
                    <br>{{ $project->created_at->diffForHumans() }} --}}      
                {{-- </small>  <small> {{ $loop->last ? 'Es el último': '' }}</small>  </li>  --}}
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No hay proyectos para mostrar
            </li>
        @endforelse
            {{ $projects->links() }}
      
    </ul>


</div>

<
   

@endsection