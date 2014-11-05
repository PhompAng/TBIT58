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

Route::resource('register', 'Register');

//Route::resource('/backend/attendee', 'BackendController');

Route::get('/backend', 'BackendController@showDashboard');
Route::get('/backend/login', 'BackendController@showLogin');
Route::post('/backend/login', 'BackendController@doLogin');
Route::get('/backend/logout', 'BackendController@doLogout');

Route::resource('/backend/attendee', 'AttendeeBackend');
Route::resource('/backend/checkin', 'CheckInBackend');
Route::resource('/backend/medical', 'MedicalBackend');
Route::resource('/backend/user', 'UserBackend');