<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    protected $fillable = ['name', 'img'];
    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
