{{-- Agregar Paginas --}}
@extends('layouts.app')

@section('container')

    <h1 class="text-center"> Nuevo Producto</h1>

    <div class="container">
        <form action="{{route('ProductosStore')}}" method="POST">
            {{-- Clave Encriptacion --}}
            @csrf 
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">

                @error('nombre')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}">

                @error('descripcion')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{old('precio')}}">

                @error('precio')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>

@endsection