<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculum;

class ExperienciaDocente extends Model
{
    protected $table = 'tbl_experiencia_docente';
    protected $primaryKey = 'id_form03';
    public $incrementing = true;

    protected $fillable = [
        'id_Curriculum',
        'materia',
        'periodo'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
