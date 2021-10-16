<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
use App\Models\User;

class Permisos extends Model
{
    protected $table = 'tbl_permiso';
    protected $primaryKey = 'id_Permiso';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    protected $fillable = [
     'nombre_Permiso' ,'slug'
    ];
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'tbl_permiso_rol', 'id_Permiso' , 'id_Rol');
    }
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'tbl_usuario_rol', 'id_Rol' , 'id_Usuario');
    }
}