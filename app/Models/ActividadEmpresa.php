<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadEmpresa extends Model
{
    protected $table = 'tbl_actividades_empresa';
    protected $primaryKey = 'id_actividad_empresa';
    public $incrementing = true;

    protected $fillable = [
        'id_Form02',
        'actividad_empresa'
    ];
}
