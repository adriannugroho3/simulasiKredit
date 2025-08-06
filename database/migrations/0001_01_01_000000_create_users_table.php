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
            $table->string('kontak_no')->primary();
            $table->string('client_name');
            $table->string('OTR');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('jadwal_angsuran', function (Blueprint $table) {
            $table->id('angsuran_id')->primary();
            $table->string('kontak_no');
            $table->string('angsuran_ke');
            $table->string('angsuran_per_bulan');
            $table->date('tanggal_jatuh_tempo');
            $table->timestamps();
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
