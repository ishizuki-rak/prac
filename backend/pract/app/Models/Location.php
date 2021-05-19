<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\UserTargetLocation;

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

    // ユーザーの当日分の目的地を限定
    public function scopeToday($query, int $userId){
        $today = Carbon::now()->format('Y-m-d');
        return $query->join('user_target_locations as t', 't.location_id', 'locations.id')
                ->where('t.user_id', $userId)
                ->where('created_at', $today);
        ;
    }
    
    // locations作成用の
    public function saveWithTarget($attributes): void{
        $l_id = null;
        $Location = new Location();
        // すでに同じものがある場合
        $location = $Location->where('name', $attributes->name)->first();
        if(count($location)){
            $l_id = $location->id;
        }
        // 作成したidを渡す
        else{
            $l_id = $Location->create($attributes)->id;
        }
        
        $UserTargetLocation = new UserTargetLocation();
        $UserTargetLocation->create([
            'user_id' => $attributes->user_id,
            'location_id' => $l_id,
            'went_at' => Carbon::now(),
            'stars' => $attributes->stars,
        ]);
    }
}
