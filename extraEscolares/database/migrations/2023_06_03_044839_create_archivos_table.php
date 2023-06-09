<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('id_archivos');
            $table->string('evidencias');
            $table->string('constancias');
            $table->string('oficio');
            $table->unsignedBigInteger('alumno_id');
           
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos'); // Establece la relación con la tabla "alumnos"
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos');
    }
}
