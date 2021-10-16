<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rol;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\PermisosRol;
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Rol::get();
        return view('roles.indexRol', compact('rol'));
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
        $rol = new Rol; 
        $rol->nombre_Rol = $request -> nombreR;
        $rol->slug = $request ->slugR; 
        $rol->save();
        return redirect('/Roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show($id_Rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Rol)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Rol)
    {
        $rol = Rol::findOrFail($id_Rol); 
        $rol->nombre_Rol = $request -> nombreR;
        $rol->slug = $request ->slugR; 
        $rol->save();
        return redirect('/Roles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Rol)
    {
        $rol = Rol::findOrFail($id_Rol); 
        $rol->delete();
        return redirect('/Roles');
    }
}
