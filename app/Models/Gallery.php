<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model (opsional)
    protected $table = 'galleries';

    // Tentukan kolom mana yang dapat diisi (fillable)
    protected $fillable = [
        'title',
        'description',
        'photo',
    ];

    // Jika foto galeri disimpan menggunakan storage Laravel
    public function getPhotoUrlAttribute()
    {
        return asset('storage/' . $this->photo);
    }
}
