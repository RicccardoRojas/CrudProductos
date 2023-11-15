@extends('layouts.app_principal')

@section('container')

<h1 class="text-center mt-3">Registro</h1>

    <div class="container">
        <form action="{{route('RegistroStore')}}" method="POST">
            {{-- Clave Encriptacion --}}
            @csrf 
            <div class="form-group mt-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Escribe Tu Nombre">

                @error('name')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Crea un Usuario">

                @error('username')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Escribe Tu Correo">

                @error('email')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escribe Tu Contraseña">
            </div>

            <div class="form-group mt-3">
                <label for="password_confirmation" class="form-label">Repetir Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite Tu Contraseña">

                @error('password')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                <a href="{{route('dashboard')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>

@endsection