<?php 
interface FixUser{
	public function login($username, $password);
	public function register($email, $username, $password);
}//end FixUser