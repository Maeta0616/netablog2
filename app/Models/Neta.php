<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neta extends Model
{
    public function combination()
    {
        return $this->belongsTo(Combination::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    protected $fillable=[
        'name',
        'combination_id',
        'genre_id',
        'overview',
        'anker'
    ];
}
