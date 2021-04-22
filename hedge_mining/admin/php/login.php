<?php 
	include_once '../php/conn.php';
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = $conn->query("SELECT * from admin where username ='$username' and password = '$password' ");
		if ($query) {
			$_SESSION['admin'] = $username;
			header('location: dashboard.php');
		}
		else{
			$err = "Invalid Credentials";
		}
	}
?>