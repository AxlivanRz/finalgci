<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Telefono extends Model
{
    use HasFactory;

    protected $table = 'tbl_telefonos_usuario';
    protected $primaryKey = 'id_telefono_usuario';
    public $incrementing = true;
    /**
     * Datos de la tabla tbl_telefonos_usuarios
     */
    protected $fillable = [
        'id_Usuario',
        'numero_telefonico'
    ];

    /**
     * Relación uno a muchos inversa
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_Usuario', 'id_usuario', 'tbl_usuarios');
    }
}
