<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
            $contraseniaU = $user->contrasena;
            $contraIn = $request->contra;
            if(HASH::check($contraIn, $contraseniaU)){
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()
                ->intended('/Inicio')
                ->with('status','¡Bienvenido!');

                }
                throw ValidationException::withMessages([
                    'correo_electronico' =>'Estas credenciales no coinciden con nuestros registros',
                ]);
        }
       
          
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Usuarios/login')
        ->with('status1', "Cerraste sesión");
    }

    public function store(Request $request)
    {
        $registro = new User; 
        $registro -> nombre = $request->nombre;
        $registro -> primer_Apellido = $request->primer_Apellido;
        $registro -> segundo_Apellido = $request->segundo_Apellido;
        $registro -> correo_electronico = $request->correo_electronico;
        $registro -> contrasena = HASH::make($request->contrasena);
        $registro->save();
        return redirect('/Usuarios/login'); 
    }
    
}
