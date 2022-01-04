<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Auth;
use App\Traits\HasTemasAndInstrumentos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Curso extends Model
{
    use HasFactory ,HasTemasAndInstrumentos;
    protected $table = 'tbl_cursos';
    protected $primaryKey = 'id_Curso';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
     'id_Usuario',
     'nombre_Curso',
     'nombre_Servicio',
     'introduccion', 
     'justificacion',
     'objetivo_General',
     'especificar_Servicio',
     'duracion_HCurso',
     'fecha_Inicio',
     'hora_Inicio',
     'hora_Salida',
     'fecha_Termino',
     'elementos_Desarrollo_Curso',
     'competencias_Desarrollar',
     'fuentes_Informacion'
    ];
}
