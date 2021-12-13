@extends('adminlte::page')

@section('title', 'Autores')
    
@section('content_header')
    <h2>Listado de autores</h2>
@endsection



@section('content')
    <a href="{{route('autor.create')}}" class="btn btn-primary">Añadir</a>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-sm" id="autores">
                <!--Cabecera de la tabla-->
                <thead>
                    <tr>
                        <th class="table-dark">Nombre</th>
                        <th class="table-dark">Apellido</th>
                        <th class="table-dark">Acciones</th>
                    </tr>
                <thead>
                <!--Fin de la cabecera-->
                <!--Cuerpo de la tabla-->
                <tbody>
                    @foreach ($autores as $autor)
                        <tr id="row-{{$autor->id}}">
                            <td>
                                {{$autor->nombre}}
                            </td>
                            <td>
                                {{$autor->apellido}}
                            </td>
                            <td>
                                <a href="{{route('autor.show', $autor->id)}}" class="btn btn-success  btn-outline-dark">
                                    <i class="fas fa-eye" title="Ver"></i>
                                </a>
                                <a href="{{route('autor.edit', $autor->id)}}" class="btn btn-info  btn-outline-dark">
                                    <i class="fas fa-edit" title="Editar"></i>
                                </a>
                                <form style="float:left; margin-right:4px;" id="{{$autor->id}}" class="mi-form" action={{route('autor.destroy', $autor->id)}} method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" id="btn-eliminar{{$autor->id}}" value="{{$autor->id}}" class="btn btn-danger btn-outline-dark " title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!--Fin del cuerpo de la tabla-->
            </table>
        </div>
    </div>
@endsection


@section('js')
    <script>

        $('#autores').DataTable({
            "ajax": '',
            "language":{
                "lengthMenu": "Mostrar" + 
                                `<select class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="-1">Todos</option>
                                </select>` + 
                                "registros por página",
                "zeroRecords": "Ningún registro coincide - disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
            
        $(document).ready(function(){

            $(".mi-form").click(function(){
                let idForm = $(this).attr('id');
                let row = 'row-'+idForm;
                //let idButton = 'btn-eliminar'+idForm;
                  
            
                $('#'+idForm).submit(function(ev) {
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
                                type: $('#'+idForm).attr('method'),
                                url: $('#'+idForm).attr('action'),
                                async: true,
                                data: $('#'+idForm).serialize(),
                                        
                                success: function(response){
                                    $('#'+row).remove();
                                    Swal.fire(
                                        'Borrado!',
                                        'Has borrado un autor.',
                                        'success'
                                    )
                                },
                                error: function(error){
                                    console.log(error);
                                }
                            }); 
                        }
                    })
                    
                });
            });
        });
    </script>
@endsection