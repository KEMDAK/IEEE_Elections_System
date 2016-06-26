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

//testing front end
Route::get('candy/index', function() {
  $presidents = App\Candidate::where('position', 'President')->get();
  $vice_presidents = App\Candidate::where('position', 'Vice President')->get();
  $treasurers = App\Candidate::where('position', 'Treassurer')->get();
  $secratories = App\Candidate::where('position', 'Secratory')->get();
  return view('candidate.index', compact('presidents','vice_presidents','treasurers','secratories'));
});

Route::get('candy/{id}', function($id) {
  $candidate = App\Candidate::first();
  return view('candidate.show',compact('candidate'));
});

Route::get('vote', function() {
  $presidents = App\Candidate::where('position', 'President')->get();
  $vice_presidents = App\Candidate::where('position', 'Vice President')->get();
  $treasurers = App\Candidate::where('position', 'Treassurer')->get();
  $secratories = App\Candidate::where('position', 'Secratory')->get();
  return view('vote.index', compact('presidents','vice_presidents','treasurers','secratories'));
});
