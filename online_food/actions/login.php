<?php
	echo action();

    function action()
    {
    	include_once '../core/session.class.php';
    	include_once '../core/customers.class.php';
    	include_once '../core/core.function.php';
	    $customer_obj = new Customers();
	    $session_obj = new Session();
	    $username = $_POST['username'];
	    $password = md5($_POST['password']);

	    if ($customer_obj->check_username($username) > 0) {
		    if ($customer_obj->login($username,$password)) {
		    	$customer = $customer_obj->fetch_customer($username);
		    	$session_obj->create_session('customer_id',$customer['id']);
		    	$session_obj->create_session('customer',$username);
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