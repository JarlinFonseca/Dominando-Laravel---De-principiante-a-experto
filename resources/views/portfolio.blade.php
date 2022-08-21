@extends('layout')

@section('title', 'Portfolio')

@section('content')

<h1>PORTFOLIO</h1>

    <ul>

        {{-- De esta forma se haria con PHP --}}
        {{--  
              <?php foreach ($portfolio as $portfolioItem): ?>
             <li> {{ $portfolioItem['title'] }} </li>
        <?php  endforeach ?>
            
            --}}

     
            
             {{-- De esta forma se haria con BLADE -Laravel  --}}
        @forelse($portfolio as $portfolioItem)
                 <li> {{ $portfolioItem['title'] }} <small> {{ $loop->last ? 'Es el último': '' }}</small> </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
      
    </ul>
   

@endsection