<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->string('razon_social');
            $table->string('actividad_economica');
            $table->timestamps();
        });

        

        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('materia')->nullable();
            $table->string('rubro')->nullable();
            $table->string('actividad_economica')->nullable();
            $table->enum('tipo_sancion',['AMONESTACION', 'MULTA','RECLAMO'])->default('RECLAMO');
            $table->string('monto');
            $table->string('num_resolucion');
            $table->string('anio_resolucion');
            $table->string('sede_indecopi');
            $table->integer('proveedor_id')->unsigned();

            $table->string('motivo_de_reclamo')->nullable();
            $table->string('forma_de_conclusion')->nullable();
            $table->string('duracion_del_reclamo')->nullable();
            $table->string('numero_de_reclamo')->nullable();
            $table->string('oficina_que_atendio_el_reclamo')->nullable();

            $table->foreign('proveedor_id')->references('id')->on('proveedors');
            $table->timestamps();
        });

        /* Schema::create('incidencia_proveedor', function(Blueprint $table){
            
            $table->increments('id');
            $table->integer('incidencia_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->foreign('incidencia_id')->references('id')->on('incidencia');

        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
        Schema::dropIfExists('incidencias');
    }
}
