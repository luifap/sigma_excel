@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear registro nuevo de estructura</h2>

<form action="/estructuras" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <a href="/estructuras" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
