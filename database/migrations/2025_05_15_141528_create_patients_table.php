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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('dni')->unique();
            $table->string('n_historia')->unique();
            $table->string('autogenerado')->unique();
            $table->string('n_sesion')->nullable();
            $table->enum('acceso_venoso',['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'])->default('');
            $table->enum('acceso_arterial',['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'])->default('');
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            $table->enum('serologia', ['SEROLOGICO', 'NO SEROLOGICO'])->default();
            $table->string('peso_seco')->nullable();

            $table->foreignId('shift_id')->constrained('shifts')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
