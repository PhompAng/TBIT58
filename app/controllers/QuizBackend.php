<?php

class QuizBackend extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('backend.quiz.list')->with('attendees', Attendee::paginate(30));
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
        if (!Input::has('id') || !Input::has('score')) {
            return Redirect::to('/backend/quiz/');
        } else {
            $id = Input::get('id');
            $score = Input::get('score');
            $attendee = Attendee::find($id);
        }
        $add_score = $attendee->quiz;
        $today = date('Y-m-d');
        if ($today == '2015-01-10') {
            $add_score->day_1_score = $score;
        } elseif ($today == '2015-01-11') {
            $add_score->day_2_score = $score;
        } elseif ($today == '2015-01-24') {
            $add_score->day_3_score = $score;
        } elseif ($today == '2015-01-25') {
            $add_score->day_4_score = $score;
        } elseif ($today == '2015-01-31') {
            $add_score->day_5_score = $score;
        } elseif ($today == '2015-02-01') {
            $add_score->day_6_score = $score;
        }
        $add_score->save();
        return Redirect::to('/backend/quiz')->with('attendee', Attendee::find($id))->with('score', $score);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, $score)
    {
        //
    }


}
