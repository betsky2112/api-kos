<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $table = 'kos';
    protected $fillable = [
        'nama',
        'lokasi',
        'harga',
        'fasilitas',
        'status',
        'pemilik_id',
    ];
    protected $casts = [
        'fasilitas' => 'array',
    ];

    public function pemilik()
    {
        return $this->belongsTo(PemilikKos::class, 'pemilik_id');
    }
}
