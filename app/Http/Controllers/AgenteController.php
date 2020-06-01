<?php

namespace App\Http\Controllers;

use App\Entities\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Agente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agente = agente::create($request->all());
        return $cliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function show(Agente $agente)
    {
        return $agente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function edit(Agente $agente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agente $agente)
    {
        $agente->update($request->all());
        return $agente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agente $agente)
    {
        $agente->delete();
        return $agente;
    }
}
