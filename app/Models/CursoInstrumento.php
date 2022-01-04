<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use App\Models\InstrumentosEvaluacion;
use App\Models\Curso;
use App\Models\Temas;

class CursoInstrumento extends Model
{
    protected $table = 'tbl_curso_instrumento';
    protected $primaryKey = ['id_Curso', 'id_Tcontenido'];
    public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
    
    ];
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'tbl_cursos', 'id_Curso');
    }
    public function instrumentos()
    {
        return $this->belongsToMany(InstrumentosEvaluacion::class, 'tbl_instrumentos_evaluacion ', 'id_Criterio');
    }
}
