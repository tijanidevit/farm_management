<?php 
	include_once 'conn.php';
	if (isset($_POST['username'])) {
		$username = flushData($_POST['username']);
		$password = md5($_POST['password']);

		$username_check = $conn->query("SELECT user_id from users where username = '$username' ");
		if ($username_check->num_rows < 1) {
			$err = "Username not recognised";
		}
		else{
			$query = $conn->query("SELECT user_id from users where username = '$username' AND password = '$password' ");

			if ($query->num_rows > 0){
				$_SESSION['user'] = $username;

				$row = $query->fetch_assoc();
				$_SESSION['user_id'] = $row['user_id'];
				header('location: dashboard.php');
			}
			else{
				$err = "Invalid Credentials";
			}
		}
	}

	function flushData($data)
	{
		return trim(htmlentities($data));
	}
?>