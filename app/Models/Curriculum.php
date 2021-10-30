<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormacionAcademico;
use App\Models\ExperienciaDocente;
use App\Models\ExperienciaLaboral;

class Curriculum extends Model
{
    protected $table = 'tbl_curriculums';
    protected $primaryKey = 'id_curriculum';
    public $incrementing = true;

    protected $fillable = [
        'id_usuario',
        'fecha_nacimiento',
        'curp'
    ];

    public function formacionDocente()
    {
        return $this->hasMany(FormacionAcademico::class);
    }

    public function experienciasLaboral()
    {
        return $this->hasMany(ExperienciaLaboral::class);
    }

    public function experienciasDocente()
    {
        return $this->hasMany(ExperienciaDocente::class);
    }
}
