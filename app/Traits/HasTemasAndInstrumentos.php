<?php 
namespace App\Traits; 
use App\Models\CursoInstrumento;
use App\Models\CursoTema; 
use App\Models\InstrumentosEvaluacion;
use App\Models\Curso;
use App\Models\Temas;
trait HasTemasAndInstrumentos{
    /**
     * @return mixeds
     */
    public function temas()
    {
        return $this->belongsToMany(Temas::class, 'tbl_instrumento_tema ', 'id_Criterio' , 'id_Tcontenido');
    }
    /**
     * @return mixeds
     */
    public function instrumentos()
    {
        return $this->belongsToMany(InstrumentosEvaluacion::class, 'tbl_instrumento_tema', 'id_Criterio' , 'id_Tcontenido');
    } 

}