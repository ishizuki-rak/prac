<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'password',
        'contents',
        'total_point',
        'followers',
        'last_login_at',
        'sessions',
        'gauge',
    ];
    
    protected $hidden = [
        'password',
        'sessions',
        'last_login_at',
    ];

    public function user_followers() {
        return $this->hasMany('App\UserFollower');
    }

    public function user_target_locations() {
        return $this->hasMany('App\UserTargetLocation');
    }
}
