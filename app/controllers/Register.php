<?php

class Register extends \BaseController {
	

	function __construct() {
		//$this->beforeFilter('auth', array('except' => array('index', 'create', 'store')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('title' => "ลงทะเบียนเข้าร่วมโครงการ - ToBeIT@KMITL '58", );
		return View::make('register.begin', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = array('title' => "ลงทะเบียนเข้าร่วมโครงการ - ToBeIT@KMITL '58", );
		return View::make('register.form', $data);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validate_rules = array(
			'prefix' 	 => 'required',	
			'name'       => 'required',
			'surname'    => 'required',
			'gender'	 =>	'required',
			'email'      => 'required|email',
			'parent_tel' => 'required|numeric',
			'tel' 		 => 'numeric',
		);
		$validator = Validator::make(Input::all(), $validate_rules);
		if (!$validator->fails()) {
			Attendee::create(Input::all());
			$data = array('title' => "ลงทะเบียนสำเร็จ! - ToBeIT@KMITL '58", );
			return View::make('register.done', $data);
		} else {
			return Redirect::to('/register/create/')->withErrors($validator)->withInput();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return View::make('backend.attendee.show', array('attendee' => Attendee::find($id)->get()));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//return View::make('backend.attendee.edit', array('attendee' => Attendee::find($id)->get()));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
