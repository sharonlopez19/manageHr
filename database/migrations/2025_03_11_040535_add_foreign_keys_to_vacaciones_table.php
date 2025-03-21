<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vacaciones', function (Blueprint $table) {
            $table->foreign(['contratoId'], 'fk_ContratoId_vacaciones')->references(['idContrato'])->on('contrato')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacaciones', function (Blueprint $table) {
            $table->dropForeign('fk_ContratoId_vacaciones');
        });
    }
};
