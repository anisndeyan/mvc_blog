<?php	
class Core_routes 
{
	function __construct($url_arr) 
	{
		if(isset($url_arr[0]) && !empty($url_arr[0])) {
			$class = $url_arr[0];
			if(file_exists('controllers/'.$class.'.php')) {
				include 'controllers/'.$class.'.php';
				$class = ucfirst($class);
				if(class_exists($class, false)) {
					$obj = new $class;
					if(isset($url_arr[1]) && !empty($url_arr[1])) {
						$method = $url_arr[1];
						if(method_exists($obj,$method)) {
							$arguments = array_slice($url_arr, 2);
							call_user_func_array(array($obj,$method), $arguments);
						} else {
							echo "$method method is not found";
						}
					} else {
						if(method_exists($obj,'index')) {
							$obj->index();
						} else {
							echo "Create <b>index</b> method in $class class !";
						}
					}
				} else {
					echo "$class class is not found";
				}
			} else {
				echo "$class file is not found";
			}
		} else {
			include "controllers/home.php";
			$df_obj = new Home;
			$df_obj->index();
		}
	}
}