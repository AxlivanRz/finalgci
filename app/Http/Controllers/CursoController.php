<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
Use Carbon\Carbon;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::get(); 
        return view('Cursos.indexCurso', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.createCurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::allows('isTeacher')){
            $curso = new Curso; 
            $curso->id_Usuario = $request ->user()->id_Usuario; 
            $curso->id_area = $request ->user()->id_Usuario; 
            $curso->nombre_curso = $request ->nombreCur; 
            $curso->tipo_servicio_curso = $request ->servicioCur; 
            $curso->tipo_modalidad_curso = $request ->servicioCur;
            $curso->introduccion = $request ->introduccionCur;
            $curso->justificacion = $request ->justificacionCur; 
            $curso->objetivo_General = $request ->objetivoCur; 
            $curso->especificar_servicio_curso = $request ->especificacionCur; 
            $curso->duracion_horas_curso = $request ->duracionCur; 
            $curso->fecha_inicio_curso = $request ->fechaI;
            $curso->fecha_finalizacion_curso = $request ->fechaF;
            $curso->elementos_Desarrollo_Curso = $request ->elementosCur; 
            $curso->competencias_Desarrollar = $request ->competenciasCur; 
            $curso->observacion_curso = $request ->observacionCur; 
            $curso->save();
            return redirect('/Curso');
        }else{
            return redirect('/Curso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_Curso
     * @return \Illuminate\Http\Response
     */
    public function show($id_Curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_Curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Curso)
    {
        
        $curso = Curso::findOrFail($id_Curso);
        return view ('cursos.editCurso', compact('curso')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_Curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Curso)
    {
        
        $curso = Curso::findOrFail($id_Curso);
        $curso->id_Usuario = $request -> id_C;
        $curso->nombre_curso = $request ->nombreCur; 
        $curso->tipo_servicio_curso = $request ->servicioCur; 
        $curso->tipo_modalidad_curso = $request ->servicioCur;
        $curso->introduccion = $request ->introduccionCur;
        $curso->justificacion = $request ->justificacionCur; 
        $curso->objetivo_General = $request ->objetivoCur; 
        $curso->especificar_servicio_curso = $request ->especificacionCur; 
        $curso->duracion_horas_curso = $request ->duracionCur; 
        $curso->fecha_inicio_curso = $request ->fechaI;
        $curso->fecha_finalizacion_curso = $request ->fechaF;
        $curso->elementos_Desarrollo_Curso = $request ->elementosCur; 
        $curso->competencias_Desarrollar = $request ->competenciasCur; 
        $curso->observacion_curso = $request ->observacionCur; 
        $curso->save();
        return redirect('/Curso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_Curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Curso)
    {
        $curso = Curso::findOrFail($id_Curso);
        $curso->delete();
        //Curso::destroy($id_Curso);

        return redirect('/Curso');
    }

    public function inicio()
    {
        $curso = Curso::get(); 
        return view('Inicio', compact('curso'));
    }
    public function vermas($id_Curso)
    {
        $instrumentos = DB::table('tbl_instrumentos_evaluacion')
        ->get()
        ->where('id_Curso', $id_Curso);
        $lista = DB::table('tbl_participantes')
        ->get()
        ->where('id_Curso', $id_Curso);
        $temas = DB::table('tbl_contenido_curso')
        ->get()
        ->where('id_Curso', $id_Curso);
        $vercurso = Curso::findOrFail($id_Curso);
        return view ('curso', compact(['vercurso', 'instrumentos', 'temas', 'lista'])); 
    }
    /**
     * Ir a una nueva página para insertar un instructor y a la vez visualizar el 
     * 
     * @param int $id_Curso of curse
     */
    public function editInstructorCourse($idCurso)
    {
        $curso = Curso::findOrFail($idCurso);
        return view('instructor.selectInstructor', compact('curso'));
    }

    /**
     * Insertar el instructor al curso
     * 
     * @param int $id_Curso de curso
     * @param \Illuminate\Http\Request
     */
    public function saveInstructor(Request $request, $id_Curso)
    {
        $curso = Curso::findOrFail($id_Curso);
        $get_rfcUser = trim($request->get('rfc_usuario'));
        $have_id = DB::table('tbl_usuarios')
        ->select('id_Usuario')
        ->where('rfc_usuario', 'LIKE', $get_rfcUser);
        $curso->id_Usuario = $have_id->get();
        return redirect('/Curso');
    }
}
