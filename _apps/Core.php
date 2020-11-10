<?php

//Write your custome class/methods here
namespace Apps;

use \Apps\Model;

class Core extends Model
{

	public $token = NULL;
	public $session_timout = session_timout;

	public $domain = domain;

	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}






	

}
