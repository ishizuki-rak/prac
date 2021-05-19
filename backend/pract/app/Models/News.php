<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'contents',
        'registed_at',
    ];

    // public function users() {
    //     return $this->belongsTo('App\User', 'user_id');
    // }
}
