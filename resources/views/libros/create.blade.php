@extends('adminlte::page')

@section('title', 'Crear libro')

@section('content_header')
    <h1>Crear libro</h1>
@endsection

@section('content')
    @include('partials.response')
    <form class="card card-body" method="post" action="{{route('libro.store')}}">   
        @csrf
        <div class="col-auto mb-3">
            <label for="titulo" class="">Titulo:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: clean code" name="titulo" id="titulo">
            @error('titulo')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="codigo" class="">Codigo:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: L-001" name="codigo" id="codigo">
            @error('codigo')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="autor" class="">Autor:</label>
            <select class="form-control form-select-sm" name="autor" id="autor">
                @foreach ($autores as $autor)
                    <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellido}}</option>
                @endforeach
            </select>
            @error('ano_publicacion')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="ano_publicacion" class="">Año de publicación:</label>
            <input type="date" class="form-control form-control-sm" name="ano_publicacion" id="ano_publicacion">
            @error('ano_publicacion')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="ubicacion_librero" class="">Ubicación en el librero:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: sección 3, estante nro 5" name="ubicacion_librero" id="ubicacion_librero">
            @error('ubicacion_librero')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="numero_copias">Número de copias:</label>
            <input type="number" class="form-control form-control-sm" placeholder="Ejem: 90" name="numero_copias" id="numero_copias">
            @error('numero_copias')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="prologo">Prologo:</label>
            <textarea type="number" class="form-control form-control-sm" placeholder="Ejem: Cards include a few options for working with image..." name="prologo" id="prologo"></textarea>
            @error('prologo')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
@endsection