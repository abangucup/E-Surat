<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jenis_id',
        'judul',
        'tgl_pelaksanaan',
        'lokasi',
        'tujuan',
        'mitra',
        'alamat_mitra',
        'keterangan',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
