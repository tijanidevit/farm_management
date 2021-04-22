<?php
	echo action();

    function action()
    {
    	include_once '../core/session.class.php';
    	include_once '../core/customers.class.php';
    	include_once '../core/core.function.php';
	    $customer_obj = new Customers();
	    $session_obj = new Session();
	    $fullname = $_POST['fullname'];
	    $username = $_POST['username'];
	    $phone = $_POST['phone'];
	    $password = md5($_POST['password']);

	    if ($customer_obj->check_username($username) > 0) {
	    	return displayWarning($username.' already exists');
	    }
	    if ($customer_obj->check_phone($phone) > 0) {
	    	return displayWarning('Phone number: '.$phone.' already exists');
	    }

	    $image = upload_file($_FILES['image'],'../images/customers/');
	    if ($customer_obj->register_customer($fullname,$username,$phone,$image,$password)) {
	    	$customer = $customer_obj->fetch_customer($username);
	    	$session_obj->create_session('customer_id',$customer['id']);
	    	$session_obj->create_session('customer',$username);
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>