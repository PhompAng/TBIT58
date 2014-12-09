<?php

class BackendController extends BaseController {

	public function showDashboard()
	{
		return View::make('backend.layouts.main');
	}

	public function showLogin()
	{
		return View::make('backend.login');
	}

	public function doLogin()
	{
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('/backend/login')->withErrors($validator)->withInput(Input::except('password'));
		} else {
			if (Auth::attempt(Input::except('_token'))) {
				return Redirect::to('/backend');
			}
			return Redirect::to('backend/login')->withErrors("Error: Please check your credential");;
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('/backend');
	}


}
