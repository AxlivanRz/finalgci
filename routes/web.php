<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InstrumentosController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (Auth::check()) {
    return redirect('/Inicio');
}
Route::view('/', 'usuarios.login'); 
Route::post('/Usuarios/login', [LoginController::class, 'login']);
Route::post('/Usuarios/register', [LoginController::class, 'store'])->name('usuarios.store');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');
Route::view('/Usuarios/login', 'usuarios.login')->name('usuarios.login')->middleware('guest');
Route::view('/Usuarios/register', 'usuarios.register')->name('usuarios.register'); 
Route::view('/Inicio', 'Inicio')->name('Inicio')->middleware('auth'); 
Route::view('/UnirmeCurso', 'curso')->name('curso')->middleware('auth'); 

Route::resource('/Curso', CursoController::class)->middleware('rol:admin,teacher');
Route::resource('/Curso/Instrumentos', InstrumentosController::class)->middleware('auth');
Route::resource('/Curso/Temas', TemasController::class)->middleware('auth');
Route::resource('/User', UsuarioController::class);