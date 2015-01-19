<?php

class QuizController extends \BaseController {
    public function index() {
        return View::make('quiz.login');
    }

    public function store() {
        $rules = array(
            'id' => 'required',
            'tel' => 'numeric|digits_between:9,10'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('quiz/')->withErrors($validator);
        } else {
            $id = Input::get('id');
            $tel = Input::get('tel');
            $data = Attendee::where('id', $id)->where('tel', $tel)->orWhere('parent_tel', $tel)->get();
            return View::make('quiz.score')->with('attendees', $data);
        }
    }
}
