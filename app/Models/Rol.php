<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permisos;
use App\Models\User;
class Rol extends Model
{
    protected $table = 'tbl_rol';
    protected $primaryKey = 'id_Rol';
    public $incrementing = true;
    //protected $keyType = 'string';
    public $timestamps = false;
    //const CREATED_AT = 'fecha_captura';
    //const UPDATED_AT = 'fecha_actualizacion';
    
    protected $fillable = [
     'nombre_Rol' ,'slug'
    ];
    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'tbl_permiso_rol', 'id_Rol' , 'id_Permiso');
    }
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'tbl_usuario_rol', 'id_Usuario' , 'id_Rol');
    }



}
