<?php

class UserWorkshop extends Eloquent {

	protected $table = 'user_workshop';

	protected $fillable = array('user_id', 'workshop_id');

}
