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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellido',50);
            $table->integer('cedula',10);
            $table->string('correo',100);
            $table->string('telefono',15);
            $table->string('direccion',60);
        

            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('departamento_id')->unsigned();

            $table->foreign('ciudad_id')->references('id')->on('ciudad')->ondelete('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamento')->ondelete('cascade');

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
        Schema::dropIfExists('clientes');
    }
};
