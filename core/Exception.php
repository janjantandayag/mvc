<?php
namespace App\Core;

class Exception
{

	public function __construct($exception)
	{
		die($exception);
	}
}