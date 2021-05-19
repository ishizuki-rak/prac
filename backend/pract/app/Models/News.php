<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'contents',
        'registed_at',
    ];

    // 最新１件
    public function getNew(){
        $this->orderBy('registed_at', 'desc')->first();
    }
}
