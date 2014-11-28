<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main');
});

Route::get('register/success', function()
{
	if(Session::get('attendee_id') != ""){
		return View::make('register.done');
	} else {
		return Redirect::to('/');
	}
});

Route::resource('register', 'Register');