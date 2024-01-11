<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    // indicamos al modelo cuál es el nombre real de la tabla
    protected $table = 'tarea';

    // indicamos al modelo cuál es su clave primaria
    protected $primaryKey = 'idTar';
}
