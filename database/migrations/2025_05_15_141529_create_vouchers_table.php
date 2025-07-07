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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();

            $table->string('anio');
            $table->string('n_comprobante')->unique();
            $table->date('date_order')->nullable(); // Mejor usar date si almacenas fechas
            $table->enum('covid', ['SI', 'NO'])->default('NO');
            $table->foreignId('patient_id')->nullable()->constrained('patients')->nullOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
