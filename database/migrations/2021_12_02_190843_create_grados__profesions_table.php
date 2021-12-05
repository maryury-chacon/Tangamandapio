<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradosProfesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados__profesions', function (Blueprint $table) {
            $table->integer('codigo_profesor')->unsigned();
            $table->integer('codigo_grado')->unsigned();
            $table->foreign('codigo_profesor')->references('id')->on('profesors');
            $table->foreign('codigo_grado')->references('id')->on('grados');
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
        Schema::dropIfExists('grados__profesions');
    }
}
