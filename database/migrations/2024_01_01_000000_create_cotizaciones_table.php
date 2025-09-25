<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('creador');
            $table->date('fecha');
            $table->text('propuesta');
            $table->text('descripcion');
            $table->text('incluye')->nullable();
            $table->text('no_incluye')->nullable();

            $table->decimal('total', 10, 2)->default(0);
            $table->string('tiempo_construccion')->nullable();
            $table->enum('estatus', ['Rechazada', 'Vencida', 'Aprobada'])->default('Vencida');
            $table->boolean('archivada')->default(false);
            $table->boolean('publicada')->default(false);
            $table->string('token_publico')->nullable()->unique();
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
        Schema::dropIfExists('cotizaciones');
    }
}