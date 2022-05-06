<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\Curso;
use App\Models\Estructura;
use App\Models\Experto;
use App\Models\PodcastCurso;




class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::all();
        return view('podcast.index')->with('podcasts', $podcasts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $expertos = Experto::all();
        $podcasts = Podcast::all();
        $estructuras = Estructura::all();
        return view('podcast.create', compact('cursos', 'expertos', 'podcasts', 'estructuras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $podcasts = new Podcast();


        $podcasts->titulo = $request->get('titulo');
        $podcasts->fecha = $request->get('fecha');
        $podcasts->enlace_ruta = $request->get('enlaceRuta');
        $podcasts->cod_archivo = $request->get('codigo');
        $podcasts->enlace_guion = $request->get('enlaceGuion');
        $podcasts->duracion = $request->get('duracion');
        $podcasts->descripcion = $request->get('descripcion');
        $podcasts->estructura_id = $request->get('estructura');
        $podcasts->experto_id = $request->get('experto');

        // $curso->enlace_ruta = $request->get('email');

        $podcasts->save();

        return  redirect('/podcasts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $podcast = Podcast::find($id);
        return view('podcast.show')->with('podcast', $podcast);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $podcast = Podcast::find($id);
        $estructuras = Estructura::all();
        $expertos = Experto::all();

        return view('podcast.edit', compact('podcast', 'estructuras', 'expertos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $podcast = Podcast::find($id);

        $podcast->titulo = $request->get('titulo');
        $podcast->fecha = $request->get('fecha');
        $podcast->enlace_ruta = $request->get('enlaceRuta');
        $podcast->cod_archivo = $request->get('codigo');
        $podcast->enlace_guion = $request->get('enlaceGuion');
        $podcast->duracion = $request->get('duracion');
        $podcast->descripcion = $request->get('descripcion');
        $podcast->estructura_id = $request->get('estructura');
        $podcast->experto_id = $request->get('experto');


        $podcast->save();

        return  redirect('/podcasts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $podcast = Podcast::find($id);
        $podcast->delete();


        return  redirect('/podcasts')->with('eliminar', 'ok');
    }
}
