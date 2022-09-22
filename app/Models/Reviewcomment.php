<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviewcomment extends Model
{
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable=[
        'title',
        'body',
        'review_id',
        'user_id',
        'votes'
        ];
}
