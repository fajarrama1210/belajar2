<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'Kelas';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function klswali()
    {
        return $this->belongsTo(klswali::class);
    }

    public function pengajaran()
    {
        return $this->belongsTo(Pengajaran::class);
    }
}
