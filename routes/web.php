<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InstrumentosController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\InstructorController;
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

Route::view('/', 'usuarios.login'); 
Route::post('/Usuarios/login', [LoginController::class, 'login']);
Route::post('/Usuarios/register', [LoginController::class, 'store'])->name('usuarios.store');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');
Route::view('/Usuarios/login', 'usuarios.login')->name('usuarios.login')->middleware('guest');
Route::view('/Usuarios/register', 'usuarios.register')->name('usuarios.register');

Route::resource('/Curso', CursoController::class)->middleware('auth');
Route::resource('/Curso/Instrumentos', InstrumentosController::class)->middleware('auth');
Route::resource('/Curso/Temas', TemasController::class)->middleware('auth');
Route::resource('/User', UsuarioController::class);
Route::resource('/Roles', RolController::class);

Route::view('Curso/Instructor', [CursoController::class, 'insertInstructor'])->name('curso.instructor');
Route::post('Curso/Instructor', [CursoController::class, 'selectInstructor'])->name('curso.selectInstructor');
Route::get('Curso/Instructor', [UsuarioController::class,  'getDataUser'])->name('usuario.getData');