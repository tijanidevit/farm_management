<?php 
	echo checkLogin();
	function checkLogin()
	{
		if (isset($_POST['code'])) {
			include_once '../class/users.class.php';
			include_once '../class/session.class.php';
			$user = new Users();
			$session = new Session();
			$code = $_POST['code'];
			$user_id = $session->get_session_value('user_id');

			if ($user->verify_user_activation_key($code,$user_id) > 0) {
				if($user->activate_user($code,$user_id)){
					$session->unset_session('user_status');
					return 1;
				}
				else{
					return '<div class="alert alert-danger">Error. Please try again</div>';
				}
			}
			else{
				return '<div class="alert alert-danger">Invalid Activation Code. Please check again</div>';
			}
		}
		else
			echo "string";
	}
?>