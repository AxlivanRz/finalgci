<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get(); 
        return view('cursos.indexCurso', compact('cursos'));
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
        //$form01Curso = request()->all();
      //$form01Curso = request()->except('_token'); 
      //Curso::insertGetId($form01Curso);
      //return response()->json($form01Curso);
      
      $curso = new Curso; 
      $curso->id_Usuario = $request ->user()->id_Usuario; 
      $curso->nombre_Curso = $request ->nombreCur; 
      $curso->nombre_Servicio = $request ->servicioCur; 
      $curso->introduccion = $request ->introduccionCur;
      $curso->justificacion = $request ->justificacionCur; 
      $curso->objetivo_General = $request ->objetivoCur; 
      $curso->especificar_Servicio = $request ->especificacionCur; 
      $curso->duracion_HCurso = $request ->duracionCur; 
      $curso->fecha_Inicio = $request ->fechaI;
      $curso->hora_Inicio = $request ->horaE;
      $curso->hora_Salida = $request ->horaS;
      $curso->fecha_Termino = $request ->fechaF;
      $curso->elementos_Desarrollo_Curso = $request ->elementosCur; 
      $curso->competencias_Desarrollar = $request ->competenciasCur; 
      $curso->fuentes_Informacion = $request ->fuentesCur; 
      $curso->save();
      $get_id=trim($request->get('nombreCur'));
      $have_id = DB::table('tbl_cursos')
        ->select('id_Curso')
        ->where('nombre_Curso', 'LIKE', $get_id);
      $have_id = $have_id ->get(); 
      //return redirect('/Curso');
      //return redirect('/Curso/Instrumentos/create', compact('have_id'));
      return view('cursos.createTemas', compact('have_id'));
      
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
        $curso->nombre_Curso = $request ->nombreCur; 
        $curso->nombre_Servicio = $request ->servicioCur; 
        $curso->introduccion = $request ->introduccionCur;
        $curso->justificacion = $request ->justificacionCur; 
        $curso->objetivo_General = $request ->objetivoCur; 
        $curso->especificar_Servicio = $request ->especificacionCur; 
        $curso->duracion_HCurso = $request ->duracionCur; 
        $curso->fecha_Inicio = $request ->fechaI;
        $curso->hora_Inicio = $request ->horaE;
        $curso->hora_Salida = $request ->horaS;
        $curso->fecha_Termino = $request ->fechaF;
        $curso->elementos_Desarrollo_Curso = $request ->elementosCur; 
        $curso->competencias_Desarrollar = $request ->competenciasCur; 
        $curso->fuentes_Informacion = $request ->fuentesCur; 
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

    /**
     * Ir a una nueva página para insertar un instructor y a la vez visualizar el 
     * 
     * @param int $id_Curso of curse
     * @var $rfc of user 
     */
    public function insertInstructor($id_Curso)
    {
        $curso = Curso::findOrFail($id_Curso);
        return view('instructor.selectInstructor', compact('curso'));
    }
    /**
     * Insertar el instructor al curso
     * 
     * @param int $id_Curso de curso
     * @param \Illuminate\Http\Request
     */
    public function selectInstructor(Request $request, $id_Curso)
    {
        $curso = Curso::findOrFail($id_Curso);
        $get_rfcUser = trim($request->get('rfc_usuario'));
        $have_id = DB::table('tbl_usuarios')
        ->select('id_usuario')
        ->where('rfc_usuario', 'LIKE', $get_rfcUser);
        $curso->id_Usuario = $have_id->get();
        return redirect('/Curso');
    }
}
