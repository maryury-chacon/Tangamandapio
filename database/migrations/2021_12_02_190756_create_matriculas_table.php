<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->integer('codigo_estudiante')->unsigned();
            $table->integer('codigo_grado')->unsigned();
            $table->integer('anio');
            $table->foreign('codigo_estudiante')->references('codigo')->on('estudiantes');
            $table->foreign('codigo_grado')->references('codigo')->on('grados');
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
        Schema::dropIfExists('matriculas');
    }
}