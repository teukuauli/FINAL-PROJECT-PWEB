<?php 
require_once('../c/user.php');
if(isset($_POST['username']) && isset($_POST['psw']) ){
	$username = $_POST['username'];
	$password = $_POST['psw'];
	$password = md5($password);

	$result = $user->login($username, $password);
	$return['valid'] = false;
	if($result > 0){
		$return['valid'] = true;
		$return['url'] = "index.php";
		$_SESSION['user_logged'] = $result['id'];
	}
	echo json_encode($return);
}