@extends('layouts.plantillabase')

@section('contenido')

                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{$podcast->titulo}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $podcast->fecha}}
                        </div>
                        <div class="form-group">
                            <audio src="{{$podcast->enlace_ruta}}" controls></audio>
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $podcast->cod_archivo}}
                        </div>
                        <div class="form-group">
                            <strong>Estructura:</strong>
                            {{$podcast->estructuras->nombre}}
                        </div>
                        <div class="form-group">
                            <strong>Experto:</strong>
                            {{$podcast->expertos->nombre}}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            @foreach ($podcast->cursos as $curso)
                                {{$curso->nombre}}
                            @endforeach
                        </div>
                        <div class="form-group">
                            <strong>Unidad Academica:</strong>
                            @foreach ($podcast->cursos as $curso)
                                {{$curso->unidad_academica}}
                            @endforeach
                        </div>

@endsection
