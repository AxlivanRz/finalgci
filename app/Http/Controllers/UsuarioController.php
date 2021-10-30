<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\HASH;
use App\Models\User; 
use App\Models\Rol;
use Illuminate\Support\Facades\DB;
use App\Models\Permisos;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        return view('usuarios.indexUser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            $roles = Rol::where('id_Rol', $request->id_Rol)->first();
            $perm = $roles->permisos;
            return  $perm;
        }
        $roles = Rol::all(); 
        //$permisos = Permisos::all();, ['permisos' => $permisos]
        return view ('usuarios.createUser', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $create = new User;
        $create->nombre_usuario = $request->nombre_usuario;
        $create->apellido_paterno_usuario = $request->apellido_paterno_usuario;
        $create->apellido_materno_usuario = $request->apellido_materno_usuario;
        $create->correo_electronico = $request->correo_electronico;
        $create->contrasena_usuario = HASH::make($request->contrasena_usuario);
        $create->save();

        if ($request->rol != null) {
            $create->roles()->attach($request->rol);
            $create->save();
        }
        if($request->permisos != null){
            foreach($request->permisos as $permiso){
                $create->permisos()->attach($permiso);
                $create->save();
            }

        }
        return redirect('/User'); 
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
    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id); 
        $roles = Rol::get();
        $userRol = $user->roles->first();
        if ($userRol != null) {
            $rolPermiso = $userRol->permisos;
        }else{
            $rolPermiso = null;
        }
       
        $userPermisos = $user->permisos;
        return view('Usuarios.editUser', [
            'user'=>$user,
            'roles'=>$roles,
            'userRol'=>$userRol,
            'rolPermiso'=>$rolPermiso,
            'userPermisos'=>$userPermisos,
        ]); 

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
        $user = User::findOrFail($id);
        $user -> nombre = $request->nombre;
        $user -> primer_Apellido = $request->primer_Apellido;
        $user -> segundo_Apellido = $request->segundo_Apellido;
        $user -> correo_electronico = $request->correo_electronico;
        if ($request->contrasena !=null) {
            $user->contrasena = Hash::make($request->contrasena);
        }
        $user->save();
        $user->roles()->detach();
        $user->permisos()->detach();
        if ($request->rol !=null) {
            $user->roles()->attach($request->rol);
            $user->save();
        }
        if ($request->permisos !=null) {
            foreach($request->permisos as $pe){
                $user->permisos()->attach($pe);
                $user->save();
            }
        }
        return redirect('/User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); 
        $user->roles()->detach();
        $user->permisos()->detach();
        $user->delete();
        return redirect('/User');
    }

    /**
     * Seach data of a user with the rfc.
     * 
     * @param \Illuminate\Http\Request
     */
    public function getDataUser(Request $request)
    {
        $usuarioRFC = $request->rfc_usuario;
        $have_id = DB::table('tbl_usuarios')
        ->select('id_usuario')
        ->where('rfc_usuario', 'LIKE', $usuarioRFC);
        $usuario = User::findOrFail($have_id);

        return compact('usuario');
    }
}
