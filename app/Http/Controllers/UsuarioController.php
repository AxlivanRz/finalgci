<?php

namespace App\Http\Controllers;

use App\Models\Constancia;
use App\Models\Curriculum;
use App\Models\ExperienciaDocente;
use App\Models\ExperienciaLaboral;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\HASH;
use App\Models\User; 
use App\Models\Rol;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\Permisos;
use Illuminate\Validation\ValidationException;
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
        return view('Usuarios.indexUser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if($request->ajax()){
        $roles = Rol::where('id_Rol', $request->id_Rol)->first();
        $permiso = $roles->permisos; 
        return  $permiso;
      }
        $roles = Rol::all(); 
        $permisos2 = Permisos::all();
        return view ('Usuarios.createUser', ['roles' => $roles], ['permisos' => $permisos2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $create = new User; 
        $create -> rfc_usuario = $request->rfc;
        $create -> curp_usuario = $request->curp;
        $create -> nombre_usuario = $request->nombre;
        $create -> apellido_paterno_usuario = $request->primer_Apellido;
        $create -> apellido_materno_usuario = $request->segundo_Apellido;
        $create -> genero_usuario = $request->genero;
        $create -> correo_electronico = $request->correo_electronico;
        $create -> contrasenia_usuario = HASH::make($request->contrasena);
        $create -> fecha_nacimiento = $request->fecha;
        $create->save();

        if ($request->rol !=null) {
            $create->roles()->attach($request->rol);
            $create->save();
        }
        if ($request-> permisos !=null) {
            foreach($request-> permisos as $per){
                $create->permisos()->attach($per);
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
        return view('Usuarios.rolesUser', [
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
        if (Gate::allows('isAdmin')){
            $user = User::findOrFail($id); 
            $user->roles()->detach();
            $user->permisos()->detach();
            $user->delete();
            return redirect('/User');
        }else{
            return redirect('/User');
        }
        
    }

    /**
     * Seach data of a user with the rfc.
     * 
     * @param \Illuminate\Http\Request
     */
    public function findUser(Request $request)
    {
        $user = User::where('curp_usuario', $request->curp_usuario)->first();

        if (empty($user)) {
            throw ValidationException::withMessages([
                'general_user' => 'Este CURP no conciden con nuestro registros',
            ]);
        } else {
            $constancias = Constancia::where('id_Usuario', 'LIKE', $user->id_usuario)->first();

            if (empty($constancias)) {
                throw ValidationException::withMessages([
                    'constancia' => 'El usuario no dispone de constancia actualmente',
                ]);
                return compact('user');
            } else {
                return [compact('user'), compact('constancias')];
            }
        }
    }

    /**
     * Show perfil of user
     * 
     * @param int id
     */
    public function perfil($idUser)
    {
        $user = User::findOrFail($idUser)->first();
        if (empty($user)) {
            throw ValidationException::withMessages([
                "general_data_user" => 'No se encontraron datos del usuario',
            ]);
        } else {

            $curriculum = Curriculum::where('id_Usuario', $user->id_Usuario)->first();
            if (empty($curriculum)) {
                throw ValidationException::withMessages([
                    "general_data_user" => 'No se encontraron datos del usuario',
                ]);
                return redirect('user.perfil', compact('user'));
            } else {
                $laboral = ExperienciaLaboral::where('id_Curriculum', $curriculum->id_curriculum)->first();
                $docente = ExperienciaDocente::where('id_Curriculum', $curriculum->id_curriculum)->first();
                return redirect('user.perfil', compact('user'), compact('laboral'), compact('docente'));
            }
        }
    }
}
