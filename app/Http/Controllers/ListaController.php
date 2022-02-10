<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;
class ListaController extends Controller
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
        if($request->ajax()){
        return "Hola";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaController  $listaController
     * @return \Illuminate\Http\Response
     */
    public function show(ListaController $listaController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaController  $listaController
     * @return \Illuminate\Http\Response
     */
    public function edit(ListaController $listaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaController  $listaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaController $listaController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaController  $listaController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListaController $listaController)
    {
        //
    }
}
