@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar registro </h2>

<form action="/cursos/{{$curso->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$curso->nombre}}">
    </div>
    <div class="mb-3">
        <label for="unidad">Unidad academica</label>
        <input id="unidad" name="unidad" type="text" class="form-control" value="{{$curso->unidad_academica}}">
    </div>

    <a href="/cursos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
