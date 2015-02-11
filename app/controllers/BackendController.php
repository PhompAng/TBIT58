<?php

class BackendController extends BaseController {

	public function showDashboard()
	{
		$data = array(
			'attendee_stats' => json_encode(
				array(
					Attendee::all()->count(),
					Attendee::where('gender', '=', 1)->count(),
					Attendee::where('gender', '=', 2)->count(),
					Attendee::where('gender', '=', 0)->count()
				)
			),
			'attending_info' => json_encode(
				array(
					Attendee::where('day_1', '=', 1)->count(),
					Attendee::where('day_2', '=', 1)->count(),
					Attendee::where('day_3', '=', 1)->count(),
					Attendee::where('day_4', '=', 1)->count(),
					Attendee::where('day_5', '=', 1)->count(),
					Attendee::where('day_6', '=', 1)->count()
				)
			),
			'attending_real' => json_encode(
				array(
					Attending::where('day_1_check', '=', 1)->count(),
					Attending::where('day_2_check', '=', 1)->count(),
					Attending::where('day_3_check', '=', 1)->count(),
					Attending::where('day_4_check', '=', 1)->count(),
					Attending::where('day_5_check', '=', 1)->count(),
					Attending::where('day_6_check', '=', 1)->count()
				)
			),
			'medical_stats' => json_encode(
				array(
					Attendee::where('food_allergy', '!=', '')->count(),
					Attendee::where('med_allergy', '!=', '')->count(),
					Attendee::where('health_condition', '!=', '')->count()
				)
			)
		);
		return View::make('backend.dashboard', $data);
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
