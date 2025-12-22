<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLens extends Model
{
    /** @use HasFactory<\Database\Factories\ContactLensFactory> */
    use HasFactory;
    protected $fillable = [
        'img',
        'name',
        'brand',
        'power',
        'price',
        'description',
        'water_content',
        'protection',
        'usage',
        'base',
    ];
}
