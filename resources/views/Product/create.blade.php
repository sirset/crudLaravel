@extends('layout.app')

@section('title', 'new producto')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row justify-content-center h-auto align-items-center">
            <div class="col-10 mx-auto col-lg-7 mt-3">
                <div class="card col-12 mx-auto">
                    <form action="{{ url('/productos') }}" method="post">
                        @csrf
                        <div class="card-header">
                            <h3>Creacion de producto</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Nombre de producto</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nombre del producto">
                                    @error('name')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Precio del producto</label>
                                    <input type="number" id="precio" name="precio" class="form-control" min="0"
                                        placeholder="Precio del producto">
                                    @error('precio')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Referencia</label>
                                    <input type="text" id="referencia" name="referencia" class="form-control"
                                        placeholder="referencia del Producto">
                                    @error('referencia')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Peso del producto</label>
                                    <input type="number" id="peso" name="peso" class="form-control" min="0"
                                        placeholder="Peso del Producto">
                                    @error('peso')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">Categoria del producto</label>
                                    <input type="text" id="categoria" name="categoria" class="form-control" min="0"
                                        placeholder="Categoría del Producto">
                                    @error('categoria')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="TextInput" class="form-label">stock del producto</label>
                                    <input type="number" id="stock" name="stock" class="form-control" min="0"
                                        placeholder="stock del Producto">
                                    @error('stock')
                                        <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn  btn-primary">Crear</button>
                            <a class="btn btn-primary" href="{{ url('/productos') }}">regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
