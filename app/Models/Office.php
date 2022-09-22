<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function combinations()
    {
        return $this->hasMany(Combination::class);
    }
    protected $fillable=[
        'name',
        'anker'
    ];
}
