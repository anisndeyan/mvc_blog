<?php
class Core_controller 
{	
	public $view;
	
	function __construct() 
	{
		$this->view = new System_view;
	}
	
}