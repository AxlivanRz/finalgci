<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Curso;

class Constancia extends Model
{
    use HasFactory;
    protected $table = 'tbl_constancias';
    protected $primaryKey = 'id_contancia';
    public $incrementing = true;

    protected $fillable = [
        'id_Usuario',
        'id_Curso',
        'folio_constancia',
        'vinculacion_constancia',
        'fecha_creacion_constancia'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
