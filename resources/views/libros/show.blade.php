@extends('adminlte::page')

@section('title', $libro->titulo)

@section('content_header')
    <h1>Descripción de libros</h1>
@endsection

@section('content')
    
    <div class="card" style="width: 45rem;">
        <div class="card-header text-center">
            <b>{{$libro->titulo}}</b>
        </div>
        <div class="card-body">
            <p class=""><b>Autor:</b> {{$fullNameAutor}}</p>
            <p class=""><b>Año de publicación:</b> {{date('d-m-Y', strtotime($libro->ano_publicacion))}}</p>
            <p class=""><b>Nro de copias:</b> {{$libro->numero_copias}}</p>
            <p class=""><b>Ubicación en el librero:</b> {{$libro->ubicacion_librero}}</p>
            <p class="mb-3"><b>Prologo:</b> {{$libro->prologo}}</p>
        </div>
        
        <div class="card-footer text-center">
            <form id="form-eliminar" action="{{route('libro.destroy', $libro->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" title="Borrar libro" type="submit">Eliminar libro</button>
            </form> 
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#form-eliminar').submit(function(ev) {
                ev.preventDefault();
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "No podras revertir este cambio!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, borrar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $('#form-eliminar').attr('method'),
                            url: $('#form-eliminar').attr('action'),
                            async: true,
                            data: $('#form-eliminar').serialize(),
                                    
                            success: function(response){
                                setTimeout(function() {      
                                    swal.fire({
                                        title: "<h2>Borrado exitoso!</h2>",
                                        text: "Redireccionando en breve.",
                                        timer: 6000,
                                        showConfirmButton: false
                                    });
                                    window.location.href = '{{ route("libro.index") }}';
                                }, 7000);

                            },
                            error: function(error){
                                console.log(error);
                            }
                        }); 
                    }
                }) 
            });
        });
    </script>
@endsection