@extends('adminlte::page')

@section('title', 'Libros')


@section('content_header')
    <h2>Listado de Libros</h2>
@endsection



@section('content')
    <a href="{{route('libro.create')}}" class="btn btn-primary">Añadir</a>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-sm" id="libros">
                <!--Cabecera de la tabla-->
                <thead>
                    <tr>
                        <th class="table-dark">Titulo</th>
                        <th class="table-dark">Autor</th>
                        <th class="table-dark">Año de publicación</th>
                        <th class="table-dark">Acciones</th>
                    </tr>
                <thead>
                <!--Fin de la cabecera-->
                <!--Cuerpo de la tabla-->
                <tbody>
                    @foreach ($libros as $libro)
                        <tr id="row-{{$libro->id}}">
                            <td>
                                {{$libro->titulo}}
                            </td>
                            <td>
                                @if ($libro->deleted_at == null)
                                    {{$libro->nombre}} {{$libro->apellido}}    
                                @else
                                    Desconocido
                                @endif
                            </td>
                            <td>
                                {{date('d-m-Y', strtotime($libro->ano_publicacion))}}
                            </td>
                            <td>
                                <a href="{{route('libro.show', $libro->id)}}" class="btn btn-success  btn-outline-dark">
                                    <i class="fas fa-eye" title="Ver autor"></i>
                                </a>
                                <a href="{{route('libro.edit', $libro->id)}}" class="btn btn-info  btn-outline-dark">
                                    <i class="fas fa-edit" title="Editar autor"></i>
                                </a>
                                <form style="float:left; margin-right:4px;" id="{{$libro->id}}" class="mi-form" action="{{route('libro.destroy', $libro->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-outline-dark" title="Borrar libro" type="submit"><i class="fas fa-trash-alt"></i></button>
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

        $('#libros').DataTable({
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
                let row = 'row-' + idForm;
                //let idButton = 'btn-eliminar'+idForm;
                
                //console.log(idForm);
                //console.log(idButton);  
            
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
                                
                                beforeSend: function(){
                                    
                                },        
                                success: function(response){
                                    $('#'+row).remove();
                                    Swal.fire(
                                        'Borrado!',
                                        'Has borrado un libro.',
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

