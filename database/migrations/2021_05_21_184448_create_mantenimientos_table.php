<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FechaMantenimiento')->nullable();
            $table->string('TipoMantenimiento', 20)->nullable();
            $table->string('Fallas', 20)->nullable();
            $table->text('TrabajoRealizado')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('observacion', 100)->nullable();
            $table->string('Repuesto', 100)->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('Repuestodos', 100)->nullable();
            $table->integer('cantidaddos')->nullable();
            $table->string('Repuestotres', 100)->nullable();
            $table->integer('cantidadtres')->nullable();
            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');  
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
        Schema::dropIfExists('mantenimientos');
    }
}
