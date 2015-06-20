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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'WelcomeController@index');
Route::get('index', 'WelcomeController@index');

// Route::get('races', function() {
//     return view('races');
// });

/****************************************
    User
****************************************/
Route::get('users', 'UserController@viewAll');
Route::get('users/create', 'UserController@create');
Route::post('users/create', 'UserController@postCreate');
Route::get('users/{id}', 'UserController@view');
Route::get('users/{id}/update', 'UserController@update');
Route::post('users/{id}/update', 'UserController@postUpdate');
Route::delete('users/{id}/delete', 'UserController@delete');
Route::get('users/{id}/comments', 'UserController@userComments');

/****************************************
    Races
****************************************/
Route::get('races', 'RaceController@viewAll');
Route::get('new_race', 'RaceController@newRace');
Route::get('races/create', 'RaceController@create');
Route::post('races/create', 'RaceController@postCreate');
Route::get('races/{id}', 'RaceController@viewRace');
Route::get('races/{id}/update', 'RaceController@update');
Route::post('races/{id}/update', 'RaceController@postUpdate');
Route::delete('races/{id}/delete', 'RaceController@delete');
Route::get('races/{id}/comments', 'RaceController@viewAllRaceComments');

// Route::get('profile', '')

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('profile', function() {
    return view('profile');
});


