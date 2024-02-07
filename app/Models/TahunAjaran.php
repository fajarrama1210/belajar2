<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table = 'TahunAjaran';
    protected $guarded = ['id'];

    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
