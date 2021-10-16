<?php 
namespace App\Traits; 
use App\Models\Rol;
use App\Models\Permisos;
use App\Models\PermisoUsuario;
use App\Models\RolUsuario;
use App\Models\User;
trait HasRolesAndPermissions{
    /**
     * @return mixeds
     */
    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'tbl_permiso_usuario', 'id_Usuario', 'id_Permiso');
    }
    /**
     * @return mixeds
     */
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'tbl_usuario_rol', 'id_Usuario' , 'id_Rol');
    }
}