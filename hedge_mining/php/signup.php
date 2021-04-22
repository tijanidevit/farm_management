<?php 
	include_once 'conn.php';
	if (isset($_POST['username'])) {
		$username = flushData($_POST['username']);
		$fullname = flushData($_POST['fullname']);
		$email = flushData($_POST['email']);
		$bitcoin = flushData($_POST['bitcoin']);
		$password = md5($_POST['password']);
		$sq = flushData($_POST['sq']);
		$sa = flushData($_POST['sa']);

		$username_check = $conn->query("SELECT * from users where username = '$username' ");
		if ($username_check->num_rows > 0) {
			$err = "Username Taken";
		}
		else{
			$query = $conn->query("INSERT INTO users() VALUES(null,'$username','$fullname','$email','$bitcoin','$password','$sq','$sa') ");

			if ($query){
				$_SESSION['user'] = $username;
				$get_user_id = $conn->query("SELECT user_id from users where username = '$username' ");
				$row = $get_user_id->fetch_assoc();
				$_SESSION['user_id'] = $row['user_id'];

				$user_id = $row['user_id'];
				$create_user_account = $conn->query("INSERT INTO user_accounts() VALUES(null,'$user_id',0.00,0.00) ");
				header('location: dashboard.php');
			}
			else{
				$err = "Registration incomplete. Try again later";
			}


		}
	}

	function flushData($inp)
	{
		return trim(htmlentities($inp));
	}
?>