<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidangs';

    protected $fillable = ['nama_bidang'];

    // Relasi ke Pegawai
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
