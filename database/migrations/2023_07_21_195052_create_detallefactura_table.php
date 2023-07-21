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
        Schema::create('detallefactura', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad',10);
            $table->integer('precio',10,0);

            $table->bigInteger('factura_id')->unsigned();
            $table->bigInteger('productos_id')->unsigned();

            $table->foreign('factura_id')->references('id')->on('factura')->ondelete('cascade');
            $table->foreign('productos_id')->references('id')->on('productos')->ondelete('cascade');
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
        Schema::dropIfExists('detallefactura');
    }
};
