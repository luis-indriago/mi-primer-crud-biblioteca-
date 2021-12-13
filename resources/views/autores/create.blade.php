@extends('adminlte::page')

@section('title', 'Crear autor')

@section('content_header')
    <h1>Crear autor</h1>
@endsection

@section('content')
    @include('partials.response')
    <form class="card card-body" method="post" action="{{route('autor.store')}}">
       
        @csrf

        <div class="col-auto mb-3">
            <label for="nombre" class="">Nombre:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Luis" name="nombre" id="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="apellido" class="">Apellido:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Indriago" name="apellido" id="apellido" value="{{old('apellido')}}">
            @error('apellido')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="edad" class="">Edad:</label>
            <input type="number" class="form-control form-control-sm" placeholder="Ejem: 20" name="edad" id="edad" value="{{old('edad')}}">
            @error('edad')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="direccion" class="">Dirección:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Carúpano, Guayacan, calle 3, casa nro 24" name="direccion" id="direccion" value="{{old('direccion')}}">
            @error('direccion')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="telefono">Telefono:</label>
            <input type="number" class="form-control form-control-sm" placeholder="Ejem: 04121139089" name="telefono" id="telefono" value="{{old('telefono')}}">
            @error('telefono')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
@endsection