<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\HASH;


class LoginController extends Controller
{
    public function login(Request $request){
        $remember = $request->filled('remember');
        $user = User::where('correo_electronico', $request->correo_electronico)->first();
      
        if (empty($user)){

            throw ValidationException::withMessages([
                'correo_electronico' =>'Estas credenciales no coinciden con nuestros registros',
            ]);  
    
        }else{
            $contraseniaU = $user->contrasenia_usuario;
            $contraIn = $request->contra;
            if(HASH::check($contraIn, $contraseniaU)){
                Auth::login($user);
                $request->session()->regenerate();
                return redirect( route('Curso.inicio'))
                ->with('status','¡Bienvenido!');
                }
                throw ValidationException::withMessages([
                    'contra' =>'Estas credenciales no coinciden con nuestros registros',
                ]);
        }
       
          
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Usuarios/login')
        ->with('status1', "Hasta luego");
    }

    public function store(Request $request)
    {   
        $registro = new User; 
        $registro -> rfc_usuario = $request->rfc;
        $registro -> curp_usuario = $request->curp;
        $registro -> nombre_usuario = $request->nombre;
        $registro -> apellido_paterno_usuario = $request->primer_Apellido;
        $registro -> apellido_materno_usuario = $request->segundo_Apellido;
        $registro -> genero_usuario = $request->genero;
        $registro -> correo_electronico = $request->correo_electronico;
        $registro -> contrasenia_usuario = HASH::make($request->contrasena);
        $registro -> fecha_nacimiento = $request->fecha;
        $registro -> grado_max_estudios = $request->grado;
        if ($request->hasFile('foto')) {
            $registro['imagen_usuario']=$request->file('foto')->store('uploads', 'public');
        }
        $registro->save();
        $registro->roles()->attach('3');
        $registro->save();    
        $registro->permisos()->attach('2');
        $registro->save();
        
        return redirect('/Usuarios/login'); 
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Usuarios.editUser', compact('user'));
    }
    public function update(Request $request, $id)
    {   
        $registro = User::findOrFail($id);
        $registro -> rfc_usuario = $request->rfc;
        $registro -> curp_usuario = $request->curp;
        $registro -> nombre_usuario = $request->nombre;
        $registro -> apellido_paterno_usuario = $request->primer_Apellido;
        $registro -> apellido_materno_usuario = $request->segundo_Apellido;
        $registro -> genero_usuario = $request->genero;
        $registro -> correo_electronico = $request->correo_electronico;
        $registro -> fecha_nacimiento = $request->fecha;
        $registro -> grado_max_estudios = $request->grado;
        if ($request->hasFile('foto')) {
            $registro['imagen_usuario']=$request->file('foto')->store('uploads', 'public');
        }
        if ($registro->contrasena !=null) {
            $registro->contrasenia_usuario = Hash::make($request->contrasena);
        }
        $registro->save();
        return redirect('/Inicio'); 
    }
    
}
