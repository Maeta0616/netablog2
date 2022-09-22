<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function netas()
    {
        return $this->hasMany(Neta::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    protected $fillable=[
        'name',
        'member1',
        'member2',
        'member3',
        'member4',
        'feature',
        'genre_id',
        'anker',
        'office_id'
    ];
}
