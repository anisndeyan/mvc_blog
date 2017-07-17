<?php

class Models_users extends Core_model {
	
	public function login($email,$pass) 
	{
		$res = $this->db->select("SELECT * FROM users WHERE email = '$email' and pass = '$pass' ",1);
		return $res;
	}
}