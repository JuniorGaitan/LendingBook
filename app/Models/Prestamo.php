<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'prestamos';

    //Definiendo los campos de la tabla
    protected $fillable = [
    'responsable_libro_id',
    'fecha_salida',
    'fecha_entrega',
    'estado_id',
    'observaciones'];
    
}
