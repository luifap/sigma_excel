<x-app-layout>
    <div class="container-fluid mt-5">

        <h2>Editar registro </h2>

        <form action="/expertos/{{$experto->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$experto->nombre}}">
            </div>
            <div class="mb-3">
                <label for="cedula">cedula</label>
                <input id="cedula" name="cedula" type="text" class="form-control" value="{{$experto->cedula}}">
            </div>
            <div class="mb-3">
                <label for="email">Correo</label>
                <input id="email" name="email" type="text" class="form-control" value="{{$experto->email}}">
            </div>

            <a href="/expertos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>

    </div>

</x-app-layout>



