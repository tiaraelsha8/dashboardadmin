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
        Schema::create('probis', function (Blueprint $table) {
            $table->id();
            $table->string('id_probis', 100);
            $table->string('nama_probis', 254);
            $table->string('uraian', 254);
            $table->string('sasaran', 254);
            $table->string('indikator', 254);
            $table->string('nilai_iku_target', 254);
            $table->string('nilai_iku_Realisasi', 254);
            $table->string('rab_l1', 254);
            $table->string('rab_l2', 254);
            $table->string('rab_l3', 254);
            $table->string('rab_l4', 254);
            $table->string('rab_l5', 254);
            $table->string('unit_kerja', 254);
            $table->string('instansi', 254);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('probis');
    }
};
