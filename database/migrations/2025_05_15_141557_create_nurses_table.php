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
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('voucher_id')->nullable()->constrained('vouchers');

            $table->string('puesto_maquina')->default('0');
            $table->string('marca')->default('FRESENIUS/4008S');
            $table->string('ultrafltrado')->nullable();
            $table->enum('acceso_venoso',['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'])->default('CVCT');
            $table->enum('acceso_arterial',['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'])->default('CVCT');
            $table->string('hierro')->default('0');
            $table->string('epo2000')->default('0');
            $table->string('epo4000')->default('0');
            $table->string('vitb12')->default('0');
            $table->string('calcitriol')->default('0');
            $table->string('otros_med')->default('0');
            $table->text('valoracion')->nullable();
            $table->text('observacion')->nullable();
            $table->string('pa_final')->nullable();
            $table->string('aspecto_dialz')->nullable();
            $table->string('peso_final')->nullable();
            
            $table->enum('estado', ['PENDIENTE', 'FINALIZADO'])->default('PENDIENTE');

            $table->foreignId('enfermero_inicia_id')->nullable()->constrained('users');
            $table->foreignId('enfermero_finaliza_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nurses');
    }
};
