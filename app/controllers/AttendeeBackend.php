<?php

class AttendeeBackend extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('attendees' 		=> Attendee::paginate(30));
		return View::make('backend.attendee.list', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.attendee.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		foreach (Input::all() as $key => $value) {
			if ($value == "") {
				$data[$key] = NULL;
			}
		}
		$attendee_id = Attendee::create($data)->id;
		$attending = new Attending();
		$attending->attendee_id = $attendee_id;
		$attending->save();
		return Redirect::to('/backend/attendee/'.$attendee_id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = array('attendee' => Attendee::find($id), );
		return View::make('backend.attendee.view', $data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = array('attendee' => Attendee::find($id), );
		return View::make('backend.attendee.edit', $data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
		foreach (Input::all() as $key => $value) {
			if ($value == "") {
				$data[$key] = NULL;
			}
		}
		$attendee = Attendee::find($id)->fill($data)->save();
		return Redirect::to('/backend/attendee/'.$id);

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Attendee::destroy($id);
		return Redirect::to('/backend/attendee/');
	}


}
