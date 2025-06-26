<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_layanan')->nullable();
            $table->string('id_layanan')->nullable();
            $table->string('nama_layanan')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('fungsi')->nullable();
            $table->string('penanggung_jawab_pelayanan')->nullable();
            $table->string('unit_pelaksana')->nullable(); // Unit Kerja (Dependency)
            $table->string('kementerian_lembaga_terkait')->nullable();
            $table->string('target_layanan')->nullable();
            $table->string('metode_layanan')->nullable();
            $table->text('potensi_manfaat')->nullable();
            $table->text('potensi_ekonomi')->nullable();
            $table->text('potensi_resiko')->nullable();
            $table->text('mitigasi_resiko')->nullable();
            $table->text('data')->nullable();
            $table->text('aplikasi')->nullable();
            $table->string('proses_bisnis_dependency')->nullable();
            $table->string('urusan_pemerintahan')->nullable(); // RAB Level 2
            $table->string('ral_level_1_dependency')->nullable();
            $table->string('ral_level_2_dependency')->nullable();
            $table->string('instansi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
