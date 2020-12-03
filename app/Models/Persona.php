<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'personas';

     //Definiendo los campos de la tabla
     protected $fillable = [
        "nombres",
        "apellidos",
        "identidad",
        "sexo_id",
        "etnia_id",
        "barrio_id",
        "direccion",
        "telefono",
        "celular",
        "fecha_nacimiento",       
        ];
}
