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
		$data = ['attendees' => Attendee::where('id', '>=', Input::get('start', 1))->take(80)->get(),
						 'title'         => "รายชื่อผู้เข้าร่วมโครงการ (เริ่มต้นที่ ID 0".Input::get('start', 1)." ถึง 80 คนถัดไป)"];
	//return PDF::load(View::make('backend.report.all_attendee', $data))->show();
	return View::make('backend.report.all_attendee', $data);
	}

	public function getClassList()
	{
		$data = ['attendees' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname', 'tel'])->where('room', '=', Input::get('room', 1))->get(),
						 'title'         => "รายชื่อผู้เข้าร่วมโครงการ (ห้อง ".Input::get('room', 223).")"];
		//return PDF::load(View::make('backend.report.class_list', $data))->show();
		return View::make('backend.report.class_list', $data);
	}

	public function getMedicalClassList()
	{
		$data = [
			'food_allergy' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname', 'food_allergy'])->where('room', '=', Input::get('room', 1))->where('food_allergy', '!=', '')->get(),
			'med_allergy' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname', 'med_allergy'])->where('room', '=', Input::get('room', 1))->where('med_allergy', '!=', '')->get(),
			'health_condition' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname', 'health_condition'])->where('room', '=', Input::get('room', 1))->where('health_condition', '!=', '')->get(),
			'title' => "รายชื่อผู้เข้าร่วมโครงการที่มีความต้องการทางการแพทย์ (ห้อง ".Input::get('room', 223).")"
		];
		//return PDF::load(View::make('backend.report.room_medical', $data))->show();
		return View::make('backend.report.room_medical', $data);
	}

	public function getCheckinList()
	{
		$data = ['attendees' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname', 'tel', 'created_at'])->whereHas('attend', function($query){
								$query->where('day_'.Input::get('day', 1).'_check', '=', True);
							})->get(),
						 'title' => "รายชื่อผู้มาเข้าร่วมโครงการ (วันที่ ".Input::get('day', 1).")"];
		//return PDF::load(View::make('backend.report.checked_in', $data))->show();
		return View::make('backend.report.checked_in', $data);
	}

	public function getCheckLeaveList()
	{
		$data = ['attendees' => Attendee::select(['id', 'prefix', 'name', 'surname', 'nickname'])->whereHas('attend', function($query){
								$query->where('day_'.Input::get('day', 1).'_check', '=', True);
							})->get(),
						 'title' => "รายชื่อผู้เข้าร่วมโครงการออกก่อนเวลา (วันที่ ".Input::get('day', 1).")"];
		//return PDF::load(View::make('backend.report.checked_in', $data))->show();
		return View::make('backend.report.checked_leave', $data);
	}

	public function getQuizScore()
	{
		$day = Input::get('day', 1);
		$mean = Quiz::avg('day_'.$day.'_score');
		$min = Quiz::min('day_'.$day.'_score');
		$max = Quiz::max('day_'.$day.'_score');
		$sum = 0;
		foreach (Quiz::where('day_'.$day.'_score', '!=', '')->get()->toArray() as $score) {
			$sum += pow($score['day_'.$day.'_score'] - $mean, 2);
		}
		$sd = sqrt($sum/Quiz::where('day_'.$day.'_score', '!=', '')->count());
		$data = ['attendees' => Attendee::join('quiz', 'attendees.id', '=', 'quiz.attendee_id')->where('day_'.$day.'_score', '!=', '')->orderBy('quiz.'.'day_'.$day.'_score', 'DESC')->get(),
				'title' => "คะแนน Quiz วันที่ ".$day,
				'day' => $day,
				'mean' => $mean,
				'min' => $min,
				'max' => $max,
				'sd' => $sd];
		return View::make('backend.report.quiz', $data);
	}

}


;
