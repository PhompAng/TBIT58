<?php

class Quiz extends Eloquent {

    protected $table = 'quiz';

    protected $fillable = array('day_1_score', 'day_2_score', 'day_3_score', 'day_4_score', 'day_5_score' ,'day_6_score');
}
