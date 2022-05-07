@extends('layout.app')

@section('title', 'Home')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row justify-content-center h-auto align-items-center">
            <div class="card col-8 col-lg-4 text-dark bg-light mb-3 card-centralizar text-center mt-5">
                <div class="card-body">
                    <div class="d-grid gap-2  mx-auto">
                        <a href="{{ url('/productos') }}" class="btn btn-primary">Productos</a>
                        <a href="" class="btn btn-primary">Ventas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
