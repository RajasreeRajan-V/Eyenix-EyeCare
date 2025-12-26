<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContactLens;

class LensSolution extends Model
{
    /** @use HasFactory<\Database\Factories\LensSolutionFactory> */
    use HasFactory;
    protected $fillable = [
    'name',
    'img',
    'contact_lens_id',
    'description'
];
 public function contactLens()
    {
        return $this->belongsTo(ContactLens::class);
    }
}
