<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cotizaciones', function (Blueprint $table) {
            // Add client name field
            $table->string('nombre_cliente')->nullable()->after('nombre');
        });

        // Update status enum values - Laravel doesn't support modifying enums directly,
        // so we need to use raw SQL
        DB::statement("ALTER TABLE cotizaciones MODIFY COLUMN estatus ENUM('Borrador', 'Pendiente', 'Rechazada', 'Vencida', 'Aprobada') DEFAULT 'Pendiente'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cotizaciones', function (Blueprint $table) {
            $table->dropColumn('nombre_cliente');
        });

        // Revert status enum values
        DB::statement("ALTER TABLE cotizaciones MODIFY COLUMN estatus ENUM('Rechazada', 'Vencida', 'Aprobada') DEFAULT 'Vencida'");
    }
}