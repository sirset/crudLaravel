@extends('layout.app')

@section('title', 'Ventas')

@section('content')
    @include('layout.header')
    <div class="container">

        <div class="row justify-content-center h-auto align-items-center">
            <div class="col-10 col-lg-9 mt-3">
                <div class="card col-12 mx-auto">
                    <form action="{{ url('/ventas') }}" method="post">
                        @csrf
                        <div class="card-header">
                            <h3>Nueva venta</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Producto:</label>
                                    <select class="form-select" aria-label="product-select" name="producto_id"
                                        id="producto_id">
                                        <option selected>Selecione un producto</option>
                                        @foreach ($productos as $producto)
                                            <option value="{{ $producto->id }}">{{ $producto->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('producto_id')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Cantidad</label>
                                    <input type="number" id="cantidad" name="cantidad" class="form-control" min="0"
                                        placeholder="Cantidad">
                                    @error('cantidad')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn  btn-primary">Agregar venta</button>
                            <a class="btn btn-primary" href="{{ url('/') }}">regresar</a>
                        </div>
                    </form>
                </div>
            </div>
            @if (Session::get('errorc'))
                <div class="col-10 mx-auto col-lg-9 mt-3">
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('errorc') }}
                    </div>
                </div>
            @endif
            @if (Session::get('success'))
                <div class="col-10 mx-auto col-lg-9 mt-3">
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="col-10 mx-auto col-lg-9 mt-3">
                <table class="table table-striped">
                    <tr class="table-primary">
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>

                    </tr>
                    @if (!@empty($ventas))
                        @foreach ($ventas as $record)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $record->producto->name }}</td>
                                <td>{{ $record->cantidad }}</td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="text-center">No hay ventas realizadas</td>
                        </tr>
                    @endif

                </table>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
