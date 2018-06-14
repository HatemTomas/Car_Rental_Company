<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Agent;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Agent::truncate();
        \App\Car::truncate();
        \App\User::truncate();

        DB::table('agent_user')->truncate();
        DB::table('car_user')->truncate();

        $AgentQuantity=3;
        $CarQuantity=15;
        $UserQuantity=10;

        factory(App\Agent::class , $AgentQuantity)->create();
        factory(App\User::class, $UserQuantity )->create();
        factory(App\Car::class,$CarQuantity)->create();

        factory(\App\Agent::class,$AgentQuantity)->create()->each(function ($agent){
            $users=\App\User::all()->random()->pluck('id');
            $agent->users()->attach($users);
        });

        factory(\App\Car::class,$CarQuantity)->create()->each(function ($car){
            $users=\App\User::all()->random()->pluck('id');
            $car->users()->attach($users);
        });

    }


}
