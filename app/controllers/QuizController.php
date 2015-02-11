<?php

class QuizController extends Controller {
    public function index() {
        return View::make('quiz.login');
    }

    public function store() {
        $rules = array(
            'id' => 'required|numeric',
            'tel' => 'required|digits_between:9,10'
        );
        $messages = array(
            'id.required' => 'กรุณากรอก ID',
            'id.numeric' => 'ID ต้องเป็นตัวเลขเท่านั้น',
            'tel.required' => 'กรุณากรอกเบอร์โทร',
            'tel.digits_between' => 'เบอร์โทรต้องเป็นตัวเลขเท่านั้น'
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::to('quiz/')->withErrors($validator);
        } else {
            $id = Input::get('id');
            $tel = Input::get('tel');
            $data = Attendee::where('id', $id)->where(function($query){
                $tel = Input::get('tel');
                $query->where('tel', $tel)->orWhere('parent_tel', $tel);
            })->get();
            if ($data->count() == 0) {
                return View::make('quiz.login')->withErrors('ไม่พบข้อมูล โปรตรวจสอบ ID และเบอร์โทร');
            } else {
                return View::make('quiz.score')->with('attendees', $data);
            }
        }
    }
}
