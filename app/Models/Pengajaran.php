<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajaran extends Model
{
    protected $table = 'Pengajaran';
    protected $guarded = ['id'];

    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }
    public function klswali()
    {
        return $this->hasMany(klswali::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

}
