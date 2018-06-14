<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function cars(){
        return $this->hasMany(Car::class, 'agent_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'agent_user','agent_id','user_id')
            ->withPivot('id');
    }
}
