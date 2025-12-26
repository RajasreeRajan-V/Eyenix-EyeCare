<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
    'eye_camp_id',
    'name',
    'phone',
];

public function eyeCamp()
{
    return $this->belongsTo(EyeCamp::class);
}

}
