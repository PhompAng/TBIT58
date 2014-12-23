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
		'tel', 'parent_tel', 'class', 'school', 'facebook_url', 'trip', 'return_trip',
		'food_allergy', 'med_allergy', 'health_condition', 'expect','day_1',
		'day_2', 'day_3', 'day_4', 'day_5', 'day_6', 'direct_ent', 'prefix', 'gender', 'room'
	);

	public function attend()
	{
		return $this->hasOne('Attending');
	}

}