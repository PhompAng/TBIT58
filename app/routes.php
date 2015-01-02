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

Route::group(array('before'=>'auth'), function(){
	Route::get('/backend', 'BackendController@showDashboard');
	Route::resource('/backend/attendee', 'AttendeeBackend');
	Route::resource('/backend/checkin', 'CheckInBackend');
	Route::resource('/backend/medical', 'MedicalBackend');
	Route::resource('/backend/profile', 'UserBackend');
	Route::resource('/backend/quiz', 'QuizBackend');
	Route::controller('/backend/search', 'SearchController');
	Route::controller('/backend/report', 'ReportController');
});

Route::get('/backend/login', 'BackendController@showLogin');
Route::post('/backend/login', 'BackendController@doLogin');
Route::get('/backend/logout', 'BackendController@doLogout');


Route::get('register/success', function()
{
	if(Session::get('attendee_id') != ""){
		return View::make('register.done');
	} else {
		return Redirect::to('/');
	}
});

Route::resource('register', 'Register');
