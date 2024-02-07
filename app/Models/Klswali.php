<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klswali extends Model
{
    use HasFactory;
    protected $table = 'Wali_kelas';
    protected $guarded = ['id'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
