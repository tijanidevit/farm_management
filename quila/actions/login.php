<?php 
	echo checkLogin();
	function checkLogin()
	{
		Global $register_message; #from constant.class.php
		if (isset($_POST['username'])) {
			include_once '../class/users.class.php';
			include_once '../class/session.class.php';
			$user = new Users();
			$session = new Session();
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			if ($user->check_username($username)) {
				if ($user->user_login($username,$password)) {
					$row = $user->fetch_user($username);
					$session->create_session('user_id',$row['user_id']);
					if ($row['status'] == 0) {
						$session->create_session('user_status',$row['status']);
					}
					$session->create_session('user',$username);
					return 1;
				}
				else{
					return '<div class="alert alert-danger">Invalid Password</div>';
				}
			}
			else{
				return '<div class="alert alert-danger">Email or Username do not exist</div>';
			}
		}
	}
?>