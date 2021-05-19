<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 1user, 1dayにつき3recordまで
 */
class UserTargetLocation extends Model
{

    protected $fillable = [
        'user_id',
        'location_id',
        'went_at',
        'stars',
    ];

    protected $date = [
        'went_at'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function locations() {
        return $this->belongsTo('App\Location', 'location_id');
    }
}
