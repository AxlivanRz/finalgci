<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\ExperienciaDocente;
use Illuminate\Http\Request;
use App\Models\ExperienciaLaboral;
use App\Models\User;

class ExperienciaLaboralController extends Controller
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
    public function store(Request $request, User $user)
    {
        // Se crea una nuevo registro en la tabla tbl_curriculums
        $curriculum = new Curriculum;
        $curriculum->id_Usuario = $user->id_usuario;
        $curriculum->safe();

        // Se crea un nuevo registro en la tabla tbl_experiencia_laboral
        $curriculumSearch = Curriculum::where('id_usuario', $user->id_usuario)->fist();
        $experienciaLaboral = new ExperienciaLaboral;
        $experienciaLaboral->id_Curriculum = $curriculumSearch->id_curriculum;
        $experienciaLaboral->puesto = $request->puesto;
        $experienciaLaboral->empresa = $request->nombreEmpresa;
        $experienciaLaboral->permanencia = $request->permanencia;
        $experienciaLaboral->actividad_empresa = $request->actividad;
        $experienciaLaboral->save();

        // Se crea un nuevo registro en la tabla tbl_experiencia_docente
        $experienciaDocente = new ExperienciaDocente;
        $experienciaDocente->id_Curriculum = $request->id_curriculum;
        $experienciaDocente->materia = $request->materia;
        $experienciaDocente->id_Curriculum = $request->periodo;
        $experienciaDocente->save();

        return redirect()->route('/User');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('curriculums.insertExperiencia', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $curriculum = Curriculum::where('id_usuario', $user->id_usuario)->first();

        $experienciaLaboral = ExperienciaLaboral::where('id_Curriculum', $curriculum->id_curriculum)->first();

        $experienciaDocente = ExperienciaDocente::where('id_Curriculum', $curriculum->id_curriculum)->first();

        return view('curriculums.editExperiencia', compact('user'), compact('experienciaLaboral'), compact('experienciaDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Se actualiza el registros con los nuevos datos en la tabla tbl_experiencia_laboral
        $curriculumSearch = Curriculum::where('id_usuario', $user->id_usuario)->fist();
        $experienciaLaboral = new ExperienciaLaboral;
        $experienciaLaboral->id_Curriculum = $curriculumSearch->id_curriculum;
        $experienciaLaboral->puesto = $request->puesto;
        $experienciaLaboral->empresa = $request->nombreEmpresa;
        $experienciaLaboral->permanencia = $request->permanencia;
        $experienciaLaboral->actividad_empresa = $request->actividad;
        $experienciaLaboral->save();

        // Se actualiza el registro en la tabla tbl_experiencia_docente
        $experienciaDocente = new ExperienciaDocente;
        $experienciaDocente->id_Curriculum = $request->id_curriculum;
        $experienciaDocente->materia = $request->materia;
        $experienciaDocente->id_Curriculum = $request->periodo;
        $experienciaDocente->save();

        return redirect()->route('/User');
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
