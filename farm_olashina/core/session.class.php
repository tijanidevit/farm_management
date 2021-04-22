<?php 

	if (!session_start()) {
		session_start();
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
	}

?>