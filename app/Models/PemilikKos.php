<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikKos extends Model
{
    use HasFactory;

    protected $table = 'pemilik_kos';
    protected $fillable = [
        'nama',
        'email',
        'telepon',
    ];

    public function kos()
    {
        return $this->hasMany(Kos::class, 'pemilik_id');
    }
}
