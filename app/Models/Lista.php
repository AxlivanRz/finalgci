<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;
    protected $table = 'tbl_asistencia';
    protected $primaryKey = 'id_lista_asistencia';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
        'id_participante', 'dia_asistencia', 'asistio', 'id_Curso'
    ];
}
