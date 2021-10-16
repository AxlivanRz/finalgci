<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumentosEvaluacion extends Model
{
    protected $table = 'tbl_instrumentos_evaluacion';
    protected $primaryKey = 'id_Criterio';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    protected $fillable = [
     'id_Curso', 'nombre_Criterio', 'valor', 
     'instrumento_Evaluacion', 'evidencia_Evaluacion'
     
    ];
}
