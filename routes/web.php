<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agents',[
    'uses'=>'AgentController@index',
    'as'=>'ShowAgents'
]);

Route::get('/cars',[
    'uses'=>'CarController@index',
    'as'=>'ShowCars'
]);

Route::get('/agentCars/{agent}',[
    'uses'=>'CarController@getAgentCars',
    'as'=>'AgentCars'
]);

Route::get('/agentUsers/{agent}',[
    'uses'=>'UserController@getSingleAgentUsers',
    'as'=>'AgentUsers'
]);

Route::get('/User',[
    'uses'=>'UserController@index',
    'as'=>'ShowUsers'
]);

Route::get('/Usercars/{user}',[
    'uses'=>'CarController@getSingleUserCars',
    'as'=>'UserCars'
]);



