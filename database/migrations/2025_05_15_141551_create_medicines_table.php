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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();

            $table->foreignId('voucher_id')->nullable()->constrained('vouchers');
        

            $table->string('hora_inicio')->nullable(); //Mostrar al generar registro
            $table->text('problemas_clinicos')->nullable();
            $table->text('signos_sintomas')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('pa_inicial')->nullable(); // Presion arterial inicial se mostrara en enfermeria y el tto
            $table->string('fc')->nullable(); // Frecuencia cardiaca
            $table->string('horas_hd')->nullable();
            $table->string('heparina')->nullable();
            $table->string('peso_inicial')->nullable(); //Mostrar al generar registro
            $table->string('peso seco')->nullable();
            $table->string('uf')->nullable(); //ultrafiltracion
            $table->string('qb')->nullable(); // flujo de sangre
            $table->string('qd')->nullable(); // flujo de dialisis
            $table->string('buffer')->default('Bicarbonato');
            $table->string('cnd')->nullable(); //Conductividad
            $table->string('sodio_inicial')->nullable();
            $table->string('sodio_final')->nullable();
            $table->string('perfil_sodio')->nullable();
            $table->string('perfil_uf')->nullable();
            $table->string('area_filtro')->nullable();
            $table->string('membrana')->default('Polietersulfona');
            $table->text('eval_final')->nullable(); // Evaluacion final
            $table->string('hora_final')->nullable(); //Mostrar al generar registro
            $table->enum('estado', ['PENDIENTE', 'FINALIZADO'])->default('PENDIENTE'); // Presion arterial final

            $table->foreignId('medico_inicia_id')->nullable()->constrained('users');
            $table->foreignId('medico_finaliza_id')->nullable()->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
