<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{

    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
    'kode_layanan',
    'id_layanan',
    'nama_layanan',
    'tujuan',
    'fungsi',
    'penanggung_jawab_pelayanan',
    'unit_pelaksana',
    'kementerian_lembaga_terkait',
    'target_layanan',
    'metode_layanan',
    'potensi_manfaat',
    'potensi_ekonomi',
    'potensi_resiko',
    'mitigasi_resiko',
    'data',
    'aplikasi',
    'proses_bisnis_dependency',
    'urusan_pemerintahan',
    'ral_level_1_dependency',
    'ral_level_2_dependency',
    'instansi',
];
}
