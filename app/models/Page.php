<?php

class Page extends Eloquent{

	protected $fillable = array(
		'title',
		'content',
		'image',
		'caption',
		'services'
		);
}