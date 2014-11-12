<?php

class Attendee extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'attendees';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');
	
	protected $fillable = array(
		'name', 'surname', 'nickname', 'email',
		'tel', 'parent_tel', 'class', 'school', 'facebook_url', 'transport',
		'food_allergy', 'med_allergy', 'health_condition', 'expect'
	);

}