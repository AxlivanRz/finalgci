<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;
use App\Models\Temas;
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
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'tbl_curso_tema', 'id_Curso' , 'id_Tcontenido');
    }
    public function temas()
    {
        return $this->belongsToMany(Temas::class, 'tbl_instrumento_tema ', 'id_Criterio' , 'id_Tcontenido');
    }
}
