<?php

namespace App\Http\Controllers;


use App\User;
use App\Models\Experto;
use Illuminate\Http\Request;

class ExpertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertos = Experto::all();
        return view('experto.index')->with('expertos', $expertos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expertos = new Experto();

        $expertos->nombre = $request->get('nombre');
        $expertos->cedula = $request->get('cedula');
        $expertos->email = $request->get('email');

        $expertos->save();

        return  redirect('/expertos');
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
        $experto = Experto::find($id);
        return view('experto.edit')->with('experto', $experto);
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
        $experto = Experto::find($id);

        $experto->nombre = $request->get('nombre');
        $experto->cedula = $request->get('cedula');
        $experto->email = $request->get('email');


        $experto->save();

        return  redirect('/expertos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experto = Experto::find($id);
        $experto->delete();


        return  redirect('/expertos')->with('eliminar', 'ok');
    }

    public function exportExcel()
    {
        
    }
}
