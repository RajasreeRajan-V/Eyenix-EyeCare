<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    /** @use HasFactory<\Database\Factories\FrameFactory> */
    use HasFactory;
     protected $fillable = [
        'name',
        'image',
        'frame_type_id',
        'material_id',
    ];

    public function frameType()
    {
        return $this->belongsTo(FrameType::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
