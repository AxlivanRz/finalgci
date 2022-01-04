<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
use App\Models\Permisos;
use App\Models\User;

class PermisoUsuario extends Model
{
    protected $table = 'tbl_permiso_usuario';
    protected $primaryKey = ['id_Usuario', 'id_Permiso'];
    public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    
    protected $fillable = [
    
    ];
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'tbl_usuarios', 'id_Usuario');
    }
    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'tbl_permisos', 'id_Permiso');
    }
}
