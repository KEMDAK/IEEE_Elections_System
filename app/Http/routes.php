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

//testing frontend
Route::get('thanks', function () {
    return view('vote.thanks');
});

Route::get('vote', function () {
  $presidents = App\Candidate::all();
  $vice_presidents = $presidents;
  $secretaries = $presidents;
  $treasurers = $presidents;
  return view('vote.vote', compact('presidents','vice_presidents','treasurers', 'secretaries'));
  // return view('vote.vote');
});

Route::post('voted',function () {
    return view('vote.thanks');
});


Route::get('activate', 'Auth\AuthController@showActivationForm');
Route::post('activate', 'Auth\AuthController@activate');
Route::get('voter', 'Auth\AuthController@index');
Route::delete('voter/{id}', 'Auth\AuthController@destroy');

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
