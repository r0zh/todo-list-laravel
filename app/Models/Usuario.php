<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // indicamos al modelo cuál es el nombre real de la tabla
    protected $table = 'usuario';

    // indicamos al modelo cuál es su clave primaria
    protected $primaryKey = 'idUsu';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //protected $fillable = [
    //    'name',
    //    'email',
    //    'password',
    //];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
