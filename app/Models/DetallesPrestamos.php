<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPrestamos extends Model
{
    use HasFactory;
     //Definiendo la tabla del modelo
     protected $table = 'detalles_prestamos';

     //Definiendo los campos de la tabla

     protected $fillable = [
     'libro_id',
     'prestamo_id',
     'cantidad',
    ];
}
