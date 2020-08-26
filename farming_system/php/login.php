<?php 
	include_once '../core/session.class.php';
	include_once '../core/farmers.class.php';
	include_once '../core/core.function.php';

	$session = new Session();
	$farmers = new Farmers();

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if ($farmers->farmer_login($email,$password)) {
			$session->create_session('farmer',$email);
			echo 1;
		}
		else{
			echo 0;
		}
	}
?>