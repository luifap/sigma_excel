<x-app-layout>
    <div class="container-fluid mt-5">

        <h2>Editar registro podcasts</h2>

        <form action="/podcasts/{{$podcast->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo">Titulo:</label>
                <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1" value="{{$podcast->titulo}}">
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2" value="{{$podcast->fecha}}">
            </div>
            <div class="mb-3">
                <label for="enlaceRuta">Enlace ruta:</label>
                <input id="enlaceRuta" name="enlaceRuta" type="text" class="form-control" tabindex="2" value="{{$podcast->enlace_ruta}}">
            </div>
            <div class="mb-3">
                <label for="codigo">Código archivo:</label>
                <input id="codigo" name="codigo" type="text" class="form-control" tabindex="3" value="{{$podcast->cod_archivo}}">
            </div>
            <div class="mb-3">
                <label for="enlaceGuion">Enlace guión:</label>
                <input id="enlaceGuion" name="enlaceGuion" type="text" class="form-control" tabindex="4" value="{{$podcast->enlace_guion}}">
            </div>
            <div class="mb-3">
                <label for="duracion">Duración:</label>
                <input id="duracion" name="duracion" type="text" class="form-control" tabindex="5" value="{{$podcast->duracion}}">
            </div>
            <div class="mb-3">
                <label for="descripcion">Descripción:</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="6" value="{{$podcast->descripcion}}">
            </div>
            <div class="mb-3">
                <label for="estructura">Estructura:</label>
                <select id="estructura" name="estructura" type="text" class="form-control selectpicker" tabindex="6">
                    <option value="{{$podcast->estructuras->nombre}}">{{$podcast->estructuras->nombre}} (Actual)</option>
                    @foreach ($estructuras as $estructura)
                        <option value="{{$estructura->id}}">{{$estructura->nombre}}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="mb-3">
                <label for="cursos">Cursos:</label>
                <select id="cursos" name="cursos" type="text" class="form-control selectpicker" tabindex="6" >
                    @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="expertos">Expertos:</label>
                <select id="expertos" name="expertos" type="text" class="form-control selectpicker" tabindex="7">
                    <option value="{{$podcast->expertos->nombre}}">{{$podcast->expertos->nombre}} (Actual)</option>
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
