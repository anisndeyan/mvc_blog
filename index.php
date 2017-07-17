<?php
spl_autoload_register(function($class_name) {
	$class_name = lcfirst($class_name);
	$class_name = str_replace("_","/",$class_name);
	include $class_name.'.php';	
});
	
	
$url = $_SERVER['REQUEST_URI'];
$url = substr($url,1);
$url = explode('/',$url);

$obj = new Core_routes($url);