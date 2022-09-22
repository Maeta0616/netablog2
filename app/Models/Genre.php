<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function netas()
    {
        return $this->hasMany(Genre::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
