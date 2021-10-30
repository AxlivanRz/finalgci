<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculum;

class ExperienciaLaboral extends Model
{
    protected $table = 'tbl_experiencia_laboral';
    protected $primaryKey = 'id_form02';
    public $incrementing = true;

    protected $fillable = [
        'id_Curriculum',
        'puesto',
        'empresa',
        'permanencia'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
