<?php

class CheckInBackend extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.checkin.list')->with('attendees', Attendee::paginate(30))->with('room1cnt', Attendee::where('room', 223)->count())->with('room2cnt', Attendee::where('room', 328)->count())->with('room3cnt', Attendee::where('room', 329)->count())->with('room4cnt', Attendee::where('room', 335)->count());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (!Input::has('id')) {
			return Redirect::to('/backend/checkin/');
		} else {
			$id = Input::get('id');
			$attendee = Attendee::find($id);
			if (!Input::has('room') && $attendee->room == null) {
				return Redirect::to('/backend/checkin/')->withErrors(["This attendee wasn't assign to any room!"])->withInput();
			}
		}
		$attending = $attendee->attend;
		$today = date('Y-m-d');
		$mode = 0;
		if ($today == '2015-01-10') {
			$attending->day_1_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		} elseif ($today == '2015-01-11') {
			$attending->day_2_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		} elseif ($today == '2015-01-24') {
			$attending->day_3_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		} elseif ($today == '2015-01-25') {
			$attending->day_4_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		} elseif ($today == '2015-01-31') {
			$attending->day_5_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		} elseif ($today == '2015-02-01') {
			$attending->day_6_check = Input::get('mode', 0);
			$attendee->food = Input::get('food', 0);
			$attendee->room = Input::get('room', 0);
		}
		$attending->save();
		return Redirect::to('/backend/checkin/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
