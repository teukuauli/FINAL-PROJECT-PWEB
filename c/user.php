<?php
require_once('../actionpage/db.php');
require_once('../interface/FixUser.php');
class user extends db implements FixUser {

	public function login($username, $password)
	{
		$sql = "SELECT * 
				FROM register
				WHERE username = ?
				AND psw = ?
				LIMIT 1";
		return $this->getRow($sql, [$username, $password]);
	}//end login

	public function signUp($email, $username, $password)
	{
		$sql = "INSERT INTO register (email, username, psw) VALUES (?,?,?);";
		return $this->insertRow($sql, [$email, $username, $password]);
	}//end SignUp

}//end class
$user = new User();