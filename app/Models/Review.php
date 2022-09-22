<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function neta()
    {
        return $this->belongsTo(Neta::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reviewcomments()
    {
        return $this->hasMany(Reviewcomment::class);
    }
    protected $fillable=[
        'title',
        'body',
        'user_id',
        'neta_id',
        'votes'
    ];

}
