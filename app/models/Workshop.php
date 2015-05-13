<?php

class Workshop extends Eloquent {

	protected $table = 'workshops';

	public function users(){
		return $this->belongsToMany('User');
	}

}
