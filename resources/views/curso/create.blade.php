@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear registro nuevo curso</h2>

<form action="/cursos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="unidad">Unidad academica</label>
        <input id="unidad" name="unidad" type="text" class="form-control" tabindex="2">
    </div>

    <a href="/cursos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
