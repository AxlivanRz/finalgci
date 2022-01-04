<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstrumentosEvaluacion;
use App\Models\Curso;
use App\Models\Temas;

class InstrumentoTema extends Model
{
    protected $table = 'tbl_instrumento_tema';
    protected $primaryKey = ['id_Criterio', 'id_Tcontenido'];
    public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
    
    ];
    public function temas()
    {
        return $this->belongsToMany(Temas::class, 'tbl_contenido_curso ', 'id_Tcontenido');
    }
    public function instrumentos()
    {
        return $this->belongsToMany(InstrumentosEvaluacion::class, 'tbl_instrumentos_evaluacion ', 'id_Criterio');
    }
}
