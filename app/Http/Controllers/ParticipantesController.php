<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participantes;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function lista($id_Curso)
    {   
        $hoy = Carbon::now();
        $carbon = new Carbon; 
        $lista = DB::table('tbl_participantes')
        ->get()
        ->where('id_Curso', $id_Curso);
        $vercurso = Curso::findOrFail($id_Curso);
        $inicio = $vercurso->fecha_inicio_curso;
        $final = $vercurso->fecha_finalizacion_curso;
        $inicioCarbon = Carbon::createFromFormat('Y-m-d', $inicio);
        $finalCarbon = Carbon::createFromFormat('Y-m-d', $final);
        $lunes_viernes = ['1','2','3','4','5'];
        $carbon = $inicioCarbon->diffInDays($finalCarbon);
        dd($carbon);
        return view ('participantes.index', compact(['vercurso', 'hoy']));
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
        $participante = new Participantes;
        $participante-> id_Curso = $request-> idC;
        $participante-> id_Usuario = $request-> idU;
        $participante->save();
        return redirect('/Inicio');
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
