<?php
	echo action();

    function action()
    {
    	include_once '../../core/session.class.php';
    	include_once '../../core/admin.class.php';
    	include_once '../../core/core.function.php';
	    $admin_obj = new Admins();
	    $session_obj = new Session();
	    $username = $_POST['username'];
	    $password = md5($_POST['password']);

	    if ($admin_obj->check_username($username) > 0) {
		    if ($admin_obj->login($username,$password)) {
		    	$session_obj->create_session('admin',$username);
		    	return 1;
		    }
		    else{
		    	return displayError('Invalid Password');
		    }
		}
		else{
			return displayWarning('Username not recognized');
		}
	    
    }
?>