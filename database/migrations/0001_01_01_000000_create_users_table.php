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
        Schema::create('kontak', function (Blueprint $table) {
            $table->id('kontak_id')->primary();
            $table->string('kontak_no')->unique();
            $table->string('client_name');
            $table->string('OTR');
            $table->string('slug');
        });

        Schema::create('jadwal_ansuran', function (Blueprint $table) {
            $table->id('ansuran_id')->primary();
            $table->foreignId('kontak_id');
            $table->string('ansuran_ke');
            $table->string('ansuran_per_bulan');
            $table->date('tanggal_jatuh_tempo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak');
        Schema::dropIfExists('jadwal_ansuran');
    }
};
