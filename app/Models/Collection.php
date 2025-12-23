<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /** @use HasFactory<\Database\Factories\CollectionFactory> */
    use HasFactory;

    Protected $fillable = [
        'name',
        'front_image',
        'back_image',
        'type',
        'gender',
        'description',
        'price',
        'brand_id',
        'shape_id',
        'frame_id'
    ];

     public function colors()
    {
        return $this->belongsToMany(
            ProductColor::class,
            'collection_product_color'
        );
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }

    public function frame()
    {
        return $this->belongsTo(Frame::class);
    }

}
