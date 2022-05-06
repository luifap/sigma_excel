<x-app-layout>

    <div class="container-fluid mt-5">

        <a href="podcasts/create" class="btn btn-success mb-3">CREAR</a>

            <table id="podcast" class="table table-hover table-striped mt-4 align-middle">
            <thead class="table-primary">
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">ENLACE RUTA</th>
                    <th scope="col">CÓDIGO ARCHIVO</th>
                    <th scope="col">ENLACE GUIÓN</th>
                    <th scope="col">DURACIÓN</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($podcasts as $podcast)
                <tr class="text-center">
                    <td>{{$podcast->id}}</td>
                    <td>{{$podcast->titulo}}</td>
                    <td>{{$podcast->fecha}}</td>
                    <td><a href="{{$podcast->enlace_ruta}}" target="_blank">Enlace</a></td>
                    <td>{{$podcast->cod_archivo}}</td>
                    <td><a href="{{$podcast->enlace_guion}}" target="_blank">Enlace</a></td>
                    <td>{{$podcast->duracion}}</td>
                    <td>{{$podcast->descripcion}}</td>
                    <td>
                        <form action="{{ route ('podcasts.destroy', $podcast->id)}}" method="POST">
                            <a href="/podcasts/{{$podcast->id}}" class="btn btn-primary">Mostrar</a>
                            <a href="/podcasts/{{$podcast->id}}/edit" class="btn btn-warning">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#podcast').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
                "language": {
                    "decimal":        "",
                    "emptyTable":     "No hay datos disponibles en la tabla",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
                    "infoFiltered":   "(filtrado de _MAX_ entradas totales)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ cursos",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Búsqueda:",
                    "zeroRecords":    "No se encontraron registros coincidentes",

                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                }
                },

            });
        } );
    </script>


</x-app-layout>

