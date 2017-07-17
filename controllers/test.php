<?php

class Test extends Core_controller 
{	
	public function index() 
	{
		$this->view->render('index');
	}
	
	public function qwerty($arg = false) 
	{
		if ($arg) {
			echo "empty";
		} else {
			echo $arg;
		}	
	}
}