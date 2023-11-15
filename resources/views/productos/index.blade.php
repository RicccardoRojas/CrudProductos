{{-- Agregar Paginas --}}
@extends('layouts.app')

@section('container')

    <h1 class="text-center">Productos</h1>

    <div class="container">

        <form action="{{route('ProductosCreate')}}" method="GET">
            <button class="btn btn-primary mb-2" type="submit">
                <span class="p-4">Nuevo</span>
            </button>
        </form>

        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td class="text-center">Acciones</td>
            </tr>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-success mx-1" href="{{route('ProductosEdit',
                            $producto->id)}}">Editar</a>
                            <form class="formulario-eliminar" action="{{route('ProductosDestroy',
                            $producto->id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger mx-1">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- Crear Paginacion por secciones usando boostrap --}}
        {{$productos->links('pagination::bootstrap-5')}}
    </div>


@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const formularios = document.querySelectorAll('.formulario-eliminar'); //Clase A Eliminar
    
    formularios.forEach(formulario => {
    formulario.addEventListener('submit', function(e) {
    e.preventDefault();
 
    Swal.fire({
    title: '¿Estás seguro?',
    text: '¡Esta acción no es reversible!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'Cancelar'
    }).then((result) => {
    if (result.isConfirmed) {
        this.submit();
    }
    });
    });
    });
    });
</script>
@endsection