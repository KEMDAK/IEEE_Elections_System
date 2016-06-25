<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('activate', 'Auth\AuthController@showActivationForm');
Route::post('activate', 'Auth\AuthController@activate');

Route::get('vote', 'VoteController@show');
Route::post('vote', 'VoteController@store');


Route::get('user/index','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user/store','UserController@store');
Route::delete('user/destroy','UserController@destroy');
Route::get('user/update','UserController@updateView');
Route::post('user/update','UserController@update');


Route::get('candidate/create','candidateController@create');
Route::post('candidate/store','candidateController@store');
Route::delete('candidate/destroy','candidateController@destroy');
Route::get('candidate/update','candidateController@updateView');
Route::post('candidate/update','candidateController@update');






