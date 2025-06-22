<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = ['judul', 'deskripsi', 'foto'];
}
