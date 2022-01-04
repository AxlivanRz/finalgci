<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculum;

class FormacionAcademico extends Model
{
    protected $table = 'tbl_formacion_academica';
    protected $primaryKey = 'id_form01';
    public $incrementing = true;

    protected $fillable = [
        'id_Curriculum',
        'nivel_academico',
        'institucion',
        'año_titulacion',
        'cedula_profesional'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
