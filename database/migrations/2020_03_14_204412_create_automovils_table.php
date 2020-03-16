<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('ciudad_origen');
            $table->string('matricula');
            $table->integer('en_venta');
            $table->bigInteger('concesionario_id')->unsigned();

            $table->foreign('concesionario_id')
                  ->references('id')
                  ->on('concesionarios');

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
        Schema::dropIfExists('automovils');
    }
}
