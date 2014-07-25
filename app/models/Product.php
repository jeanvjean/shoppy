<?php

class Product extends Eloquent {
	public function Cart()
		{
			return $this->belongsToMany('Cart');
		}
}
