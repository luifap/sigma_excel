<x-app-layout>
    <div class="container-fluid mt-4">

        <h2 class="mb-3">Crear nuevo registro</h2>

        <form action="/podcasts" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo">Titulo:</label>
                <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="enlaceRuta">Enlace ruta:</label>
                <input id="enlaceRuta" name="enlaceRuta" type="text" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="codigo">Código archivo:</label>
                <input id="codigo" name="codigo" type="text" class="form-control" tabindex="3">
            </div>
            <div class="mb-3">
                <label for="enlaceGuion">Enlace guión:</label>
                <input id="enlaceGuion" name="enlaceGuion" type="text" class="form-control" tabindex="4">
            </div>
            <div class="mb-3">
                <label for="duracion">Duración:</label>
                <input id="duracion" name="duracion" type="text" class="form-control" tabindex="5">
            </div>
            <div class="mb-3">
                <label for="descripcion">Descripción:</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="6">
            </div>
            <div class="mb-3">
                <label for="estructura">Estructura:</label>
                <select id="estructura" name="estructura" type="text" class="form-control selectpicker" tabindex="7">
                    @foreach ($estructuras as $estructura)
                        <option value="{{$estructura->id}}">{{$estructura->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="experto">Experto:</label>
                <select id="experto" name="experto" type="text" class="form-control selectpicker" tabindex="8">
                    @foreach ($expertos as $experto)
                        <option value="{{$experto->id}}">{{$experto->nombre}}</option>
                    @endforeach
                </select>
            </div>


            <a href="/podcasts" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>

    </div>

</x-app-layout>


