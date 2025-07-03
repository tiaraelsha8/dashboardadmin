<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $fillable = ['kode_data', 'id_data', 'nama_data', 'uraian_data', 'tujuan_dari', 'aplikasi', 'sifat_data', 'validitas_data', 'jenis_data', 'penghasil_data', 'penanggung_jawab_data', 'informasi_terkait_input', 'informasi_terkait_output', 'interoperabilitas', 'proses_bisnis_dependency', 'layanan_dependency', 'rad_level_1_dependency', 'rad_level_2_dependency', 'standar_teknis_spbe', 'audit_keamanan_spbe', 'identifikasi_kerentanan_spbe', 'kelaikan_keamanan_spbe', 'edukasi_kesadaran_spbe', 'penanganan_insiden_spbe', 'peningkatan_keamanan_spbe', 'instansi'];
}
