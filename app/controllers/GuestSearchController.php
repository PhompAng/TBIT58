<?php

class GuestSearchController extends Controller {
    public function index() {
        return View::make('search.login');
    }
    public function show($id) {
        $rules = array(
            'name' => 'required'
        );
        $message = array(
            'name.required' => 'กรุณากรอกชื่อ'
        );
        $validator = Validator::make(Input::all(), $rules, $message);
        if ($validator->fails()) {
            return Redirect::to('search/')->withErrors($validator);
        } else {
            $name = Input::get('name');
            $data = Attendee::where('name', 'LIKE', '%'.$name.'%')->orWhere('surname', 'LIKE', '%'.$name.'%')->get();
        }
        return View::make('search.search')->with('attendees', $data);
    }
}
