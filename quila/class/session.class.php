<?php 
	session_start();
	
	class Title
	{
		public $title ='';
		function __construct($value)
		{
			$this->title = $value;
		}
	}
	class Session
	{
		function create_session($name,$value)
		{
			$_SESSION[$name] = $value;
		}
		function check_session($name)
		{
			if (isset($_SESSION[$name])) {
				return true;
			}
			else{
				return false;
			}
		}
		function destroy_session($name)
		{
			session_destroy();
		}
		function unset_session($name)
		{
			unset($_SESSION[$name]);
		}

		function get_session_value($name)
		{
			return $_SESSION[$name];
		}

		function check_status($ref){
			if ($this->check_session('user_status')) {
				$this->redirect('activation.php',$ref);
			}
		}

		function check_login($ref){
			if (!$this->check_session('user')) {
				$this->redirectToLogin($ref);
			}
		}

		function redirect($link,$ref){
			if (!empty($ref)) {
				echo "<script>location.href='".$link."?ref=".$ref."'</script>";
			}
			else{
				echo "<script>location.href='".$link."'</script>";
			}
		}

		function redirectToLogin($ref)
		{
			$this->redirect('sign-in.php',$ref);
		}
	}

?>