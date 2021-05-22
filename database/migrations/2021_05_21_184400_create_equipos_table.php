<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen', 100)->nullable();
            $table->string('area', 100)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('marca', 100)->nullable();
            $table->string('modelo', 100)->nullable();
            $table->string('series', 100)->nullable();
            $table->string('activo', 100)->nullable();
            $table->string('fabrica', 100)->nullable();
            $table->string('Proveedor', 100)->nullable();
            $table->string('TelProveedor', 100)->nullable();
            $table->date('FechaCompra')->nullable();
            $table->integer('TiempoGarantia')->nullable();
            $table->integer('ciclovida')->nullable();
            $table->string('fuenteAlimentacion', 100)->nullable();
            $table->string('voltaje', 100)->nullable();
            $table->string('corriente', 100)->nullable();
            $table->string('frecuencia', 100)->nullable();
            $table->string('potencia', 100)->nullable();
            $table->string('presion', 100)->nullable();
            $table->string('capacidad', 100)->nullable();
            $table->string('riesgo', 100)->nullable();
            $table->string('uso', 100)->nullable();
            $table->string('propiedad', 100)->nullable();
            $table->string('mantenimiento', 100)->nullable();
            $table->string('preventivo', 100)->nullable();
            $table->string('manual', 100)->nullable();
            $table->string('anexonombre', 100)->nullable();
            $table->string('anexoserie', 100)->nullable();
            $table->string('anexomodelo', 100)->nullable();
            $table->string('anexoactivo', 100)->nullable();
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
        Schema::dropIfExists('equipos');
    }
}
