<?php

class Core_model 
{
	public $db;
	
	function __construct() 
	{
		$this->db = new Core_db;
	}
}