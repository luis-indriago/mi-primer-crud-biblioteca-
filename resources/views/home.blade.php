@extends('adminlte::page')

@section('title', 'Inicio')


@section('content_header') 
    <h1>Bienvenido... algunos de nuestros libros</h1>
@endsection


@section('content')
    <div class="row">
        @foreach ($libros as $libro)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$libro->titulo}}</h5>
                        <p class="card-text">{{substr($libro->prologo, 0, 100)}}...</p>
                        <a href="{{route('libro.show', $libro->id)}}" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
          </div>
        @endforeach
    </div>
@endsection

