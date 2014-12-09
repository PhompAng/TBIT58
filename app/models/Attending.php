<?php

class Attending extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'attending';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');
	
	protected $fillable = array(
		'day_1_check', 'day_2_check', 'day_3_check', 'day_4_check', 'day_5_check', 'day_6_check'
	);

}