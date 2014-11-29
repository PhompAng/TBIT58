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
			'name'       => 'required|alpha',
			'surname'    => 'required|alpha',
			'gender'	 =>	'required',
			'email'      => 'required|email',
			'parent_tel' => 'required|numeric|digits_between:9,10',
			'tel' 		 => 'numeric|digits_between:9,10',
		);
		$validator = Validator::make(Input::all(), $validate_rules);
		if (!$validator->fails()) {
			$attendee_id = Attendee::create(Input::all())->id;
			$attendee_id = str_repeat("0", 6-strlen($attendee_id)).$attendee_id;
			$data = array('title' 		=> "ลงทะเบียนสำเร็จ! - ToBeIT@KMITL '58",
						  'attendee_id' => $attendee_id,
						  'firstname'	=> Input::get('name'),
						  'lastname'	=> Input::get('surname'));
			Mail::queue('mail.confirm', $data, function($message)
			{
			    $message->to(Input::get('email'), Input::get('name')." ".Input::get('surname'))->subject('การลงทะเบียนเข้าร่วมโครงการ ToBeIT@KMITL \'58 สำเร็จ!');
			});
			return Redirect::to('/register/success/')->with('attendee_id', $attendee_id);
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
