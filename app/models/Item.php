<?php

class Item extends Eloquent {

	public function user() { return $this->belongsTo('User'); }
	public function city() { return $this->belongsTo('City'); }

}