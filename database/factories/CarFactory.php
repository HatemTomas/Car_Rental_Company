<?php
use App\Agent;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'model'=>$faker->numberBetween(1990 , 2017),
        'agent_id'=>function(){
        return Agent::all()->random();
        }
    ];
});
