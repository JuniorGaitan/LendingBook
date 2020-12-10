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
    'persona_id',
    'fecha_salida',
    'fecha_entrada',
    'estado_id'
    ,
];

public function persona()
{
    return $this->hasOne(
        Persona::class,
        'id',
        'persona_id'
    );
}
public function estado()
{
    return $this->hasOne(
        Estado::class,
        'id',
        'estado_id'
    );
}

    
}
