<?php

namespace App\Http\Controllers;

use App\Models\Estructura;
use Illuminate\Http\Request;

class EstructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estructuras = Estructura::all();
        return view('estructura.index')->with('estructuras', $estructuras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estructura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estructuras = new Estructura();

        $estructuras->nombre = $request->get('nombre');

        $estructuras->save();

        return  redirect('/estructuras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estructura = Estructura::find($id);
        return view('estructura.edit')->with('estructura', $estructura);
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
        $estructura = Estructura::find($id);

        $estructura->nombre = $request->get('nombre');

        $estructura->save();

        return  redirect('/estructuras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estructura = Estructura::find($id);
        $estructura->delete();


        return  redirect('/estructuras')->with('eliminar', 'ok');
    }
}
