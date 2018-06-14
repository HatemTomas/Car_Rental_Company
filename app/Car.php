<?php

namespace App;
use App\Agent;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function agents(){
        return $this->belongsTo(Agent::class );
    }

    public function users(){
        return $this->belongsToMany(User::class,'car_user','car_id','user_id');
    }
}

