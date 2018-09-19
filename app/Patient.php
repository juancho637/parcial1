<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        "nombre",
        "cedula",
        "genero",
        "edad",
        "tipo_edad",
        "eps",
        "sintoma",
        "glicemia",
        "hemoglobina",
    ];
}
