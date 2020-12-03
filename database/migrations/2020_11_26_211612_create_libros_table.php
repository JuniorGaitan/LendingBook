<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('libro');
            $table->string('editorial');
            $table->string('autor');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string('cantidad');
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
        Schema::dropIfExists('libros');
    }
}
