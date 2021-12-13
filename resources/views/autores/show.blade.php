@extends('adminlte::page')

@section('title', $autor->nombre)
    

@section('content_header')
    <h1>Descripción completa del autor</h1>
@endsection

@section('content')
    <div class="card" style="width: 32rem;">
        <div class="card-header text-center">
            <b>{{$autor->nombre}} {{$autor->apellido}}</b>
        </div>
        <div class="card-body">
            <p class=""><b>Edad:</b> {{$autor->edad}}</p>
            <p class=""><b>Telefono:</b> {{$autor->telefono}}</p>
            <p class=""><b>Dirección:</b> {{$autor->direccion}}</p>
        </div>
        
        <div class="card-footer text-center">
            <form id="form-eliminar" action="{{route('autor.destroy', $autor->id)}}" method="post">
                @csrf
                @method('delete')
                <button id="btn-eliminar" class="btn btn-danger" title="Borrar autor" type="submit">Eliminar Autor</button>
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
                                    window.location.href = '{{ route("autor.index") }}';
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
