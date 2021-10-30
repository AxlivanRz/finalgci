<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Auth;
class Curso extends Model
{
    protected $table = 'tbl_cursos';
    protected $primaryKey = 'id_Curso';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
        'id_usuario',
        'id_area',
        'nombre_Curso',
        'tipo_servicio_curso',
        'tipo_modalida_curso',
        'introduccion',
        'justificacion',
        'objetivo_General',
        'especificar_Servicio',
        'duracion_HCurso',
        'fecha_inicio',
        'hora_Inicio',
        'hora_Salida',
        'fecha_finalizacion',
        'elementos_Desarrollo_Curso',
        'competencias_Desarrollar',
        'fuentes_Informacion',
    ];
}
