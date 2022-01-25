<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Auth;
use App\Traits\HasTemasAndInstrumentos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Curso extends Model
{
    use HasFactory;
    protected $table = 'tbl_cursos';
    protected $primaryKey = 'id_Curso';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
     'id_Usuario',
     'id_area',
     'nombre_curso',
     'tipo_servicio_curso',
     'tipo_modalidad_curso',
     'introduccion', 
     'justificacion',
     'objetivo_General',
     'especificar_servicio_curso', 
     'duracion_horas_curso',
     'fecha_inicio',
     'fecha_finalizacion_curso',
     'elementos_Desarrollo_Curso',
     'competencias_Desarrollar',
     'observacion_curso',
    ];
}
