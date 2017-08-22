<?php

/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22/08/2017
 * Time: 4:50 PM
 */
class PublicClass
{
	public $hi;

	public function __construct()
	{
		$this->hi = "hello";
	}

	public function sayHi()
	{
		echo $this->hi;
	}

	public function setHi($text)
	{
		$this->hi = $text;
	}

}