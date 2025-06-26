<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Probis extends Model
{
    use HasFactory;

    protected $table = 'probis';

    protected $fillable = ['id_probis', 'nama_probis', 'uraian', 'sasaran', 'indikator', 'nilai_iku_target', 'nilai_iku_Realisasi', 'rab_l1', 'rab_l2', 'rab_l3', 'rab_l4', 'rab_l5', 'unit_kerja', 'instansi'];
}
