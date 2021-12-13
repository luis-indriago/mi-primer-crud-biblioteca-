@extends('adminlte::page')

@section('content_header')
    <h1>Editar autor</h1>
@endsection

@section('content')
    @include('partials.response')
    <form class="card card-body" action="{{route('autor.update', $autor->id)}}" method="post">
    
        @csrf
        @method('put')
        <div class="col-auto mb-3">
            <label for="nombre" class="">Nombre:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Luis" name="nombre" id="nombre" value="{{$autor->nombre}}">
            @error('nombre')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="apellido" class="">Apellido:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Indriago" name="apellido" id="apellido" value="{{$autor->apellido}}">
            @error('apellido')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="edad" class="">Edad:</label>
            <input type="number" class="form-control form-control-sm" placeholder="Ejem: 20" name="edad" id="edad" value="{{$autor->edad}}">
            @error('edad')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="direccion" class="">Dirección:</label>
            <input type="text" class="form-control form-control-sm" placeholder="Ejem: Carúpano, Guayacan, calle 3, casa nro 24" name="direccion" id="direccion" value="{{$autor->direccion}}">
            @error('direccion')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="col-auto mb-3">
            <label for="telefono">Telefono:</label>
            <input type="number" class="form-control form-control-sm" placeholder="Ejem: 04121139089" name="telefono" id="telefono" value="{{$autor->telefono}}">
            @error('telefono')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Actualizar</button>
        </div>
    </form>
@endsection