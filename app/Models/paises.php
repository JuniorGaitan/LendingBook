<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'paises';

    //Definiendo los campos de la tabla
    protected $fillable = ['pais'];
}
