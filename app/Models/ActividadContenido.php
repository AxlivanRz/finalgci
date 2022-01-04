<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadContenido extends Model
{
    protected $table = 'tbl_actividades_contenido';
    protected $primaryKey = 'id_actividad_contenido';
    public $incrementing = true;

    protected $fillable = [
        'id_Tcontenido',
        'nombre_actividad_contenido'
    ];
}
