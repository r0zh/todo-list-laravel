<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    
    // indicamos al modelo cuál es el nombre real de la tabla
    protected $table = 'etiqueta';

    // indicamos al modelo cuál es su clave primaria
    protected $primaryKey = 'idEti';
    
    // indicamos al modelo que no vamos a utilizar los campos created_at y updated_at
    public $timestamps = false;
}
