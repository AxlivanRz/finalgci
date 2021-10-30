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
    protected $primaryKey = 'id_usuario';
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
        'estatus_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'password',
        //'remember_token',
        'contrasena_usuario'
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
