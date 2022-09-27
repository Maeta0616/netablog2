<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password','age','sex','neta',"provider_id","provider_token","provider_refresh_token"
=======
        'name',
        'email',
        'password',
        'age',
        'sex',
        'combination_id'
>>>>>>> 75e38d3d58aaf94eb4cbf13802c7db240b5ede1f
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function neta()
    {
        return $this->belongsTo(Neta::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function reviewcomments()
    {
        return $this->hasMany(Reviewcomment::class);
    }
    public function combination()
    {
        return $this->belongsTo(Combination::class);
    }
}
