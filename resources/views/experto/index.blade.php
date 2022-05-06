<x-app-layout>

    <div class="container-fluid mt-5">

        <a href="expertos/create" class="btn btn-success mb-3">CREAR</a>

            <table id="expertos" class="table table-hover table-striped mt-4 align-middle">
            <thead class="table-primary">
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CEDULA</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expertos as $experto)
                <tr class="text-center">
                    <td>{{$experto->id}}</td>
                    <td>{{$experto->nombre}}</td>
                    <td>{{$experto->cedula}}</td>
                    <td>{{$experto->email}}</td>
                    <td>
                        <form action="{{ route ('expertos.destroy', $experto->id)}}" method="POST">
                            <a href="/expertos/{{$experto->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#expertos').DataTable({
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





