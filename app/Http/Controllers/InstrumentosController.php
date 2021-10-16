<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\InstrumentosEvaluacion;
use Illuminate\Support\Facades\DB;

class InstrumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cursos.createInstrumento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $instrumento = new InstrumentosEvaluacion;
        $instrumento->id_Curso = $request ->idCur;
        $instrumento->nombre_Criterio = $request ->nombreEva; 
        $instrumento->valor = $request ->valorEva;
        $instrumento->instrumento_Evaluacion = $request ->instrumentoEva; 
        $instrumento->evidencia_Evaluacion = $request ->evidenciaEva; 
        $instrumento->save();
        $get_id1=trim($request->get('nombreEva'));
        $have_id2 = DB::table('tbl_instrumentos_evaluacion')
        ->select('id_Curso')
        ->where('nombre_Criterio', 'LIKE', '%'.$get_id1. '%');
        $have_id2 = $have_id2 ->get(); 
        return view('cursos.createInstrumento', compact('have_id2'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_Criterio
     * @return \Illuminate\Http\Response
     */
    public function show($id_Criterio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_Criterio
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Criterio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_Criterio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Criterio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_Criterio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Criterio)
    {
        //
    }
}
