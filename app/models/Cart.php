<?php

class Cart extends \Eloquent {
	public function User()
	{
		return $this->hasOne('User');
	}
	public function Product() {
		return $this->belongsToMany('Product');
	}
}