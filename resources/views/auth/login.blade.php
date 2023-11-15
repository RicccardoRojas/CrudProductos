@extends('layouts.app_principal')

@section('container')

<h1 class="text-center mt-3">Login</h1>

    <div class="container">
        <form action="{{route('LoginStore')}}" method="POST">
            {{-- Clave Encriptacion --}}
            @csrf 

            @if(session('mensaje'))
            <div style="color: red">{{session('mensaje')}}</div>
            @endif
            
           
            <div class="form-group mt-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Crea un Usuario">

                @error('username')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escribe Tu Contraseña">

                @error('password')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                <a href="{{route('dashboard')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>

@endsection