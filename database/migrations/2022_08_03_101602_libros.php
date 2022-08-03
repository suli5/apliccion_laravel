<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->bigIncrements('id');

            $table->bigInteger('categoria_id')->unsigned();//bigInteger PARA INDICAR QUE EL DATO ES EXTERNO, ESTE CAMPO SERA LA LLAVE FORANEA QUE SE RELACIONE CON EL id DE LA TABLA categorias

            $table->string('nombre');

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            
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
        //
    }
};
