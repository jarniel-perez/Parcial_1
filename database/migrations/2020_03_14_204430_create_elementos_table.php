<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->integer('serie');
          $table->string('ciudad_origen');
          $table->json('caracteristicas');
          $table->bigInteger('automovil_id')->unsigned();

          $table->foreign('automovil_id')
                ->references('id')
                ->on('automovils');
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
        Schema::dropIfExists('elementos');
    }
}
