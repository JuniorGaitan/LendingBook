<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    //Definiendo la tabla del modelo
     protected $table = 'estado';

     //Definiendo los campos de la tabla
     protected $fillable = ['estados'];
}
