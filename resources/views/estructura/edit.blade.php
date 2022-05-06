@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar registro </h2>

<form action="/estructuras/{{$estructura->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estructura->nombre}}">
    </div>

    <a href="/estructuras" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
