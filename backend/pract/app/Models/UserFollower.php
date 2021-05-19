<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserFollower extends Model
{
    protected $fillable = [
        'user_id',
        'follow_user_id',
    ];

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }

    // 対象をフォロー中のユーザを限定
    public function scopeUser($query, $userId){
        return $query->where('follow_user_id', $userId);
    }
}