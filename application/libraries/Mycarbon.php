<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Carbon\Carbon;

class Mycarbon extends Carbon {
	public function __construct($time = null, $tz = null)
	{
		parent::__construct($time, $tz);
	}

	public function parseDate($string)
	{
		return Carbon::parse($string);
	}
}
