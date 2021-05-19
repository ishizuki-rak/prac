<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'coordinate',
        'name',
        'advance',
        'locate',
    ];

    public function user_target_locations() {
        return $this->hasMany('App\UserTargetLocation', 'locate_id');
    }
}
