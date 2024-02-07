<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{

    protected $table = 'Guru';
    protected $guarded = ['id'];


    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    public function pengajarans()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
