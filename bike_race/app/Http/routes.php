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

Route::get('races', function() {
    return view('races');
});

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
Route::get('users/{id}/comments', 'UserController@usercomments');
Route::get('logout', 'UserController@logout');

// Route::get('profile', '')

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('profile', function() {
    return view('profile');
});


