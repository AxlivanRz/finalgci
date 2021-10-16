<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Temas;
use Illuminate\Support\Facades\DB;

class TemasController extends Controller
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
        return view('cursos.createTemas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tema = new Temas;
        $tema->id_Curso = $request ->idCur;
        $tema->nombre_TemaSub = $request ->nombreInst; 
        $tema->tiempo_Programado = $request ->tiempoInst;
        $tema->actividades_Aprendizaje = $request ->actividadesInst; 
        $tema->save();
        $get_id1=trim($request->get('nombreEva'));
        $have_id1 = DB::table('tbl_instrumentos_evaluacion')
        ->select('id_Curso')
        ->where('nombre_Criterio', 'LIKE', '%'.$get_id1. '%');
        $have_id1 = $have_id1 ->get(); 
        return view('cursos.createTemas', compact('have_id1'));
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
