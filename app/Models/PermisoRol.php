<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
use App\Models\Permisos;

class PermisoRol extends Model
{
    protected $table = 'tbl_permiso_rol';
    protected $primaryKey = ['id_Rol', 'id_Permiso']; 
    public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
    
    ];
    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'tbl_permisos', 'id_Permiso');
    }
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'tbl_rol', 'id_Rol');
    }
   
}
