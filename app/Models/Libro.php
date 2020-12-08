<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'libros';

    //Definiendo los campos de la tabla
    protected $fillable = [
        'libro',
        'editorial',
        'autor',
        'categoria_id',
        'cantidad',
    ];

        public function categoria()
        {
            return $this->hasOne(
                Categorias::class,
                'id',
                'categoria_id'
            );
        }
    
    
}
