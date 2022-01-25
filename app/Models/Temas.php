<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\InstrumentosEvaluacion;
use App\Models\Curso;
class Temas extends Model
{
    protected $table = 'tbl_contenido_curso';
    protected $primaryKey = 'id_Tcontenido';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    protected $fillable = [
     'id_Curso' ,'nombre_TemaSub', 'tiempo_Programado', 'actividades_aprendizaje'
    ]; 
}