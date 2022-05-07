@extends('layout.app')

@section('title', 'producto')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row justify-content-center h-auto align-items-center mt-4">
            <div class="col-4">
                <a href="{{ url('/productos/create') }}" class="btn btn-primary">Crear Producto</a>
                <a href="{{ url('/') }}" class="btn btn-primary">Volver</a>
            </div>


        </div>
        <div class="row justify-content-center h-auto align-items-center">
            <div class="col-10 mx-auto col-lg-9 mt-3">
                <table class="table table-striped">
                    <tr class="table-primary">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Referencia</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                    @if (!@empty($productos))
                        @foreach ($productos as $record)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->referencia }}</td>
                                <td>{{ $record->precio }}</td>
                                <td>{{ $record->peso }}</td>
                                <td>{{ $record->categoria }}</td>
                                <td>{{ $record->stock }}</td>
                                <td><a class="btn btn-warning"
                                        href="{{ url('/productos/' . $record->id . '/edit') }}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ url('/productos/' . $record->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" onclick="return confirm('Borrar?')"
                                            class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center">No hay productos</td>
                        </tr>
                    @endif

                </table>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
