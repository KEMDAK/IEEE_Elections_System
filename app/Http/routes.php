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
Route::get('voter', 'Auth\AuthController@index');
Route::delete('voter/{id}', 'Auth\AuthController@destroy');

/**
 * voting routes
 */
Route::get('vote', 'VoteController@index');
Route::post('vote', 'VoteController@store');
Route::get('vote/thanks', 'VoteController@thanks');


/*
|--------------------------------------------------------------------------
| Routes for Candidates
|--------------------------------------------------------------------------
|
| Here are all the routes for the different functionalities
| of the candidates.
|
*/

Route::resource('candidate', 'CandidateController');
