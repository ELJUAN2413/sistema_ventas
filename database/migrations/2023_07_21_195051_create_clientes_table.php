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
            $table->integer('cedula',)->nullable(false);
            $table->string('correo',100);
            $table->string('telefono',15);
            $table->string('direccion',60);


            $table->bigInteger('ciudad_id')->unsigned();


            $table->foreign('ciudad_id')->references('id')->on('ciudad')->ondelete('cascade');


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
