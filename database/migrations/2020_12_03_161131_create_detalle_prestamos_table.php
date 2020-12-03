<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('libro_id')->constrained('libros');
            $table->foreignId('prestamo_is')->constrained('prestamos');
            $table->integer('cantidad');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_prestamos');
    }
}
