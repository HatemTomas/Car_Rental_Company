<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Agent;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function agents(){
        return $this->belongsToMany(Agent::class,'agent_user', 'user_id','agent_id')
            ->withPivot('id');
    }

    public function cars(){
        return $this->belongsToMany(Car::class,'car_user','user_id','car_id')
            ->withPivot('id');
    }
}
