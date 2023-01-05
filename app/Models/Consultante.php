<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'telefono',
        'correo',
        'comuna_id',
        'barrio_id',
        'nombresE',
        'apellidosE',
        'edad',
        'grado'
    ];
}
