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
        'students',
        'unemployed',
        'housewife',
        'private_employee',
        'fisherman',
        'farmer',
        'islam',
        'kristen',
        'katolik',
        'hindu',
        'buddha',
        'konghucu',
        'belum_kawin',
        'kawin',
        'cerai_mati',
        'kawin_tercatat',
        'kawin_tidak_tercatat',
        'cerai_hidup',
    ];
    
}
