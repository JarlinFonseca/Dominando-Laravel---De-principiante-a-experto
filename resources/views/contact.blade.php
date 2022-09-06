@extends('layout')


@section('title', 'Contact')

@section('content')

<div class="container">

    {{-- .row>.col-12 --}}

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">



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
            
            
                <form  class="bg-white shadow rounded py-3 px-4" action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <h1 class="display-4">{{ __('Contact') }}</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm  
                        @error('name') is-invalid  @else border-0 @enderror"
                        type="text" id="name" name="name" placeholder="Nombre..."  value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                           {{--  {!! $errors->first('name', '<small style="color:red;">:message</small><br>') !!} --}}
                    </div>
        
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input class="form-control bg-light shadow-sm  
                        @error('email') is-invalid  @else border-0 @enderror"
                        type="text" id="email" name="email" placeholder="Email..."  value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm  
                        @error('subject') is-invalid  @else border-0 @enderror"
                        type="text" id="subject" name="subject" placeholder="Asunto..."  value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm  
                        @error('content') is-invalid  @else border-0 @enderror"
                        type="text" id="subject" name="content" placeholder="Mensaje..." > {{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
          
                    
                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                </form>
        
        


        </div>
    </div>




</div>


@endsection