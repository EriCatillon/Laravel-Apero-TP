<?php

use Observers\AperoObserver;

class Apero extends Eloquent {

	protected $fillable = ['title','content','email','user_id','status'];

	public static function boot (){

		parent::boot();

		Apero::observe(new AperoObserver);
	}

}