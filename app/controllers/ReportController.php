<?php

class ReportController extends BaseController {

	public function getIndex()
	{
		return View::make('backend.report.main');
	}

	public function postIndex()
	{
		$keyword = Input::get('keyword', null);
		if ($keyword != "") {
			switch (Input::get('in')) {
				case 'id':
					$result = Attendee::where('id', '=', $keyword)->get();
					break;

				case 'name':
					$result = Attendee::where('name', 'like', "%".$keyword."%")->orWhere('surname', 'like', "%".$keyword."%")->get();
					break;

				case 'nickname':
					$result = Attendee::where('nickname', 'like', '%'.$keyword.'%')->get();
					break;

				case 'tel':
					$result = Attendee::where('tel', 'like', "%".$keyword."%")->orWhere('parent_tel', 'like', "%".$keyword."%")->get();
					break;

				case 'fb':
					$result = Attendee::where('facebook_url', 'like', "%".$keyword."%")->get();
					break;

				case 'school':
					$result = Attendee::where('school', 'like', "%".$keyword."%")->get();
					break;
			}	
		} else {
			$result = array();
		}
		return Response::json($result);
	}

	public function getAttendeeList()
	{
		$data = ['attendees' => Attendee::all()];
		return $data;
	}

	public function getClassList()
	{
		$data = ['attendees' => Attendee::select(['id', 'name', 'surname', 'nickname', 'tel'])->where('room', '=', Input::get('room', 1))->get()];
		return $data;
	}

	public function getMedicalClassList()
	{
		$data = [
			'food_allergy' => Attendee::select(['id', 'name', 'surname', 'nickname', 'parent_tel', 'food_allergy'])->where('room', '=', Input::get('room', 1))->where('food_allergy', '!=', '')->get(),
			'med_allergy' => Attendee::select(['id', 'name', 'surname', 'nickname', 'parent_tel', 'med_allergy'])->where('room', '=', Input::get('room', 1))->where('med_allergy', '!=', '')->get(),
			'health_condition' => Attendee::select(['id', 'name', 'surname', 'nickname', 'parent_tel', 'health_condition'])->where('room', '=', Input::get('room', 1))->where('health_condition', '!=', '')->get(),
		];
		return $data;
	}

	public function getCheckinList()
	{
		$data = ['attendees' => Attendee::select(['id', 'name', 'surname', 'nickname'])->whereHas('attend', function($query){
					$query->where('day_'.Input::get('day', 1).'_check', '=', True);
				})->get()];
		return $data;
	}

}
