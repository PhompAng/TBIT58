<?php

class UserBackend extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.profile.edit');
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
		$validate_rules = array(
			'password'       => 'confirmed',
			'name'    => 'required|alpha',
			'surname'	 =>	'required|alpha',
		);
		$validator = Validator::make(Input::all(), $validate_rules);
		if (!$validator->fails()) {
			$data = array(
				'password' => Hash::make(Input::get('password')),
				'name'		 => Input::get('name'),
				'surname'	 => Input::get('surname')
			);
			Auth::user()->fill($data)->save();
			return Redirect::to('/backend/profile/');
		} else {
			return Redirect::to('/backend/profile/')->withErrors($validator)->withInput();
		}
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
