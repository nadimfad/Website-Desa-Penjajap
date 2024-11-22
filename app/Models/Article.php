<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Jika ada kolom yang diisi selain 'fillable', tambahkan ke sini:
    protected $fillable = ['title', 'content'];
}
