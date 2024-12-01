<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infographic extends Model
{
    use HasFactory;

    protected $fillable = [
        'population',
        'households',
        'female',
        'male',
        'islam',
        'kristen',
        'katolik',
        'buddha',
        'hindu',
        'konghucu',
        'belum_kawin',
        'kawin',
        'cerai_mati',
        'kawin_tercatat',
        'kawin_tidak_tercatat',
        'cerai_hidup',
    ];
    
}
