<?php 

class auth extends Core_controller 
{
	public function login() 
	{
		if(isset($_POST['login'])) {
			if(empty($_POST['email']) || empty($_POST['pass'])) {
				$this->view->error = "Fill all fields";
			} else {
				$email = $_POST['email'];
				$pass = md5($_POST['pass']);
				$model = new Models_users;
				$res = $model->login($email,$pass);
				if(is_null($res)) {
					$this->view->error = "Wrong email or password";
				}
			}
		}
		$this->view->render('login');
	} 
}