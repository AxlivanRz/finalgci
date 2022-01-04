<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasRolesAndPermissions;
use App\Models\Telefono;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndPermissions ;
    protected $table = "tbl_usuarios";
    protected $primaryKey = 'id_Usuario';
    public $incrementing = true;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_area_usuario',
        'rfc_usuario',
        'curp_usuario',
        'nombre_usuario',
        'apellido_paterno_usuario',
        'apellido_materno_usuario',
        'genero_usuario',
        'correo_electronico',
<<<<<<< HEAD
        'contrasenia_usuario',
        'fecha_nacimiento',

=======
        'estatus_usuario'
>>>>>>> bdc8d637767e346f07c3482ee42ad7e99286dea8
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'password',
        //'remember_token',
<<<<<<< HEAD
        'contrasenia_usuario'
=======
        'contrasena_usuario'
>>>>>>> bdc8d637767e346f07c3482ee42ad7e99286dea8
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
       // 'email_verified_at' => 'datetime',
    ];

    /**
     * The function that relation to tbl_telefono
     * 
     */
    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }
}
