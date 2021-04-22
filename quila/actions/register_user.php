<?php 
	echo checkLogin();
	function checkLogin()
	{
		if (isset($_POST['firstname'])) {
			include_once '../class/users.class.php';
			include_once '../class/session.class.php';
			$user = new Users();
			$session = new Session();
			$firstname = $_POST['firstname'];
			$othernames = $_POST['othernames'];
			$username = toLowerCase($_POST['username']);
			$email = toLowerCase($_POST['email']);
			$password = md5($_POST['password']);
            $code = rand(100000,999999);


            $register_header = '<h4 class="text-center">Welcome to Quila</h4>';
					$register_message = $register_header.'
						<div class="card">
							<div class="card-body">
								<h5 class="text-center">Confirm your email address to activate your account</h5>
								<p>To start using and enjoying our service, use this code verify your email address <b>'.$code.'</b></p>
							</div>
						</div>';

			if ($user->check_email($email)) {
				return '<div class="alert alert-danger">Email Already Used. Try a unique one</div>';
			}

			if ($user->check_username($username)) {
				return '<div class="alert alert-danger">Username Already Used. Try a unique one</div>';
			}
				
			sendEmail($email,$register_message);
			if ($user->register_user($firstname,$othernames,$username,$password,$email,$code)) {
				$row = $user->fetch_user($username);
				$session->create_session('user_id',$row['user_id']);
				$session->create_session('user_status',$row['status']);
				$session->create_session('user',$username);

				echo "<script>location.href='activation.php'</script>";
				//header('location:../registration-success.php');
			}
			else{
				return '<div class="alert alert-danger">Registration Failed</div>';
			}
		}
	}

	function toLowerCase($value){
		return strtolower($value);
	}

	function sendEmail($email,$message)
	{
		include_once '../class/email.class.php';
		$email_obj = new Email();
		$email_obj->send_register_link($email,$message);
	}
?>