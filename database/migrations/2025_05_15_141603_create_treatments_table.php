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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('voucher_id')->nullable()->constrained('vouchers');

            $table->string('hr')->nullable();
            $table->string('pa')->nullable();
            $table->string('fc')->nullable();
            $table->string('qb')->nullable();
            $table->string('cnd')->nullable();
            $table->string('ra')->nullable();
            $table->string('rv')->nullable();
            $table->string('ptm')->nullable();
            $table->string('observacion')->nullable();

            $table->enum('estado', ['PENDIENTE', 'FINALIZADO'])->default('PENDIENTE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
