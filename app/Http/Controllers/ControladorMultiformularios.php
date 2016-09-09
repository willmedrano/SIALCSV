<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControladorMultiformularios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ejmploformularios
        //formulario1.blade.php
    }

public function formulario1Muestra(){
    return view('ejmploformularios.formulario1');
}
public function formulario1Muestra2(){
    return view('ejmploformularios.formulario11');
}

public function formulario2Muestra(){
    return view('ejmploformularios.formulario2');
}
public function formulario2Muestra2(){
    return view('ejmploformularios.formulario22');
}
public function formulario3Muestra(){
    return view('ejmploformularios.formulario3');
}
public function formulario3Muestra3(){
    return view('ejmploformularios.formulario33');
}
public function formulario4Muestra(){
    return view('ejmploformularios.formulario4');
}
public function formulario4Muestra4(){
    return view('ejmploformularios.formulario44');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
