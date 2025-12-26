<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyeCamp extends Model
{
    /** @use HasFactory<\Database\Factories\EyeCampFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'image',
        'organizer',
        'status',
    ];
public function appointments()
{
    return $this->hasMany(Appointment::class);
}

}
