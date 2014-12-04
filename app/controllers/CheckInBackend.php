<?php

class CheckInBackend extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('attendees' => Attendee::all(), );
		return View::make('backend.checkin.list', $data);
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
		if (Input::has('id')) {
			$id = Input::get('id');
		}
		$attending = Attendee::find($id)->attend;
		$today = date('Y-m-d');
		if ($today == '2015-01-11') {
			$attending->day_1_check = !$attending->day_1_check;
		} elseif ($today == '2015-01-11') {
			$attending->day_2_check = !$attending->day_2_check;
		} elseif ($today == '2015-01-24') {
			$attending->day_3_check = !$attending->day_3_check;
		} elseif ($today == '2015-01-25') {
			$attending->day_4_check = !$attending->day_4_check;
		} elseif ($today == '2015-01-31') {
			$attending->day_5_check = !$attending->day_5_check;
		} elseif ($today == '2015-02-01') {
			$attending->day_6_check = !$attending->day_6_check;
		}
		$attending->save();
		return Redirect::to('/backend/checkin/')->with('attendee', Attendee::find($id));
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
