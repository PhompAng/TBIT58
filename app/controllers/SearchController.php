<?php

class SearchController extends BaseController {

	public function getIndex()
	{
		return View::make('backend.search');
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


}
