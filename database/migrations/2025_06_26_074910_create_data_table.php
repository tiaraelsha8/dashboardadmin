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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            
            $table->string('kode_data')->nullable();
            $table->string('id_data')->nullable();
            $table->string('nama_data')->nullable();
            $table->text('uraian_data')->nullable();
            $table->text('tujuan_dari')->nullable();
            $table->string('aplikasi')->nullable();
            $table->string('sifat_data')->nullable();
            $table->string('validitas_data')->nullable();
            $table->string('jenis_data')->nullable();
            $table->string('penghasil_data')->nullable(); // atau produsen_data
            $table->string('penanggung_jawab_data')->nullable(); // (Dependency)

            $table->text('informasi_terkait_input')->nullable();
            $table->text('informasi_terkait_output')->nullable();
            $table->string('interoperabilitas')->nullable();

            // Dependencies
            $table->string('proses_bisnis_dependency')->nullable();
            $table->string('layanan_dependency')->nullable();
            $table->string('rad_level_1_dependency')->nullable();
            $table->string('rad_level_2_dependency')->nullable();

            $table->string('standar_teknis_spbe')->nullable();
            $table->string('audit_keamanan_spbe')->nullable();
            $table->string('identifikasi_kerentanan_spbe')->nullable();
            $table->string('kelaikan_keamanan_spbe')->nullable();
            $table->string('edukasi_kesadaran_spbe')->nullable();
            $table->string('penanganan_insiden_spbe')->nullable();
            $table->string('peningkatan_keamanan_spbe')->nullable();

            $table->string('instansi')->nullable(); // (Dependency)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
