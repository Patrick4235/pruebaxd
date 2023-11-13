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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->set('Registro',['DNI','Carné']);
            $table->set('Documento',['BoletaPedido','BoletaAtencion','SolicitudPrestamo']);
            $table->set('Estado',['Egresado','Estudiante']);
            $table->integer('Libro')->nullable();
            $table->set('Damage',['Si','No']);
            $table->date('fechaPrestamo');
            $table->date('fechaRecepcion');
            
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
        Schema::dropIfExists('usuario');
    }
};
