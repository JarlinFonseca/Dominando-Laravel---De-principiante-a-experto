@extends('layout')


@section('title', 'Contact')

@section('content')

<h1>{{ __('Contact') }}</h1>

{{-- @if($errors->any())

        {{ var_dump($errors->all()) }} 

        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
            
        @endforeach
        </ul>
      
@endif
 --}}
{{-- Ver errores --}}
{{-- {{ var_dump($errors->any()) }} --}}



<form action="{{ route('contact') }}" method="POST">
        @csrf
        
        <label for="name">Digite su nombre:</label>
        <p>
            <input type="text" name="name" placeholder="Nombre..."  value="{{ old('name') }}"><br>
            {!! $errors->first('name', '<small style="color:red;">:message</small><br>') !!}
        </p>
        <label for="email">Digite correo al cúal enviara la información:</label>
        <P>
           
            <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
            {!! $errors->first('email', '<small style="color:red;">:message</small><br>') !!}
        </P>
        <label for="name">Digite el asunto del correo:</label>
        <P>
            <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
            {!! $errors->first('subject', '<small style="color:red;">:message</small><br>') !!}
        </P>
        <label for="name">Digite su mensaje:</label>
        <P>
          <textarea name="content" placeholder="Mensaje....">{{old('content')}}</textarea><br>
          {!! $errors->first('content', '<small style="color:red;">:message</small><br>') !!}
        </P>
        
        <button>@lang('Send')</button>
</form>

@endsection