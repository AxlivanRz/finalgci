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
        $instrumento->nombre_Criterio = $request ->nombreEva; 
        $instrumento->id_Curso = $request ->idCur;
        $instrumento->valor = $request ->valorEva;
        $instrumento->instrumento_Evaluacion = $request ->instrumentoEva; 
        $instrumento->evidencia_Evaluacion = $request ->evidenciaEva; 
        $instrumento->save();
        return redirect ('/Curso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_Criterio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrumentos = DB::table('tbl_instrumentos_evaluacion')
        ->get()
        ->where('id_Curso', $id);
        $temas = DB::table('tbl_contenido_curso')
        ->get()
        ->where('id_Curso', $id);
        return view('Cursos.indexTI', compact(['instrumentos', 'temas']));
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
        $instrumento = InstrumentosEvaluacion::findOrFail($id_Criterio);
        $instrumento->nombre_Criterio = $request ->nombreEva; 
        $instrumento->valor = $request ->valorEva;
        $instrumento->instrumento_Evaluacion = $request ->instrumentoEva; 
        $instrumento->evidencia_Evaluacion = $request ->evidenciaEva; 
        $instrumento->save();
        return redirect(redirect()->getUrlGenerator()->previous());
    
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
