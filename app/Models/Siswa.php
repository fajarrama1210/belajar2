<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $guarded = ['id'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function klswali()
    {
        return $this->hasOne(klswali::class);
    }
}
