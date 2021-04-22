<?php
	session_start();
	echo action();

    function action()
    {
    	include_once '../core/carts.class.php';
	    $cart_obj = new Carts();
	    if (!isset($_SESSION['customer_id'])) {
	    	return 0;
	    }
	    else{
	    	$customer_id = $_SESSION['customer_id'];
	    	return $cart_obj->customer_carts_num($customer_id);
		}
	    
    }
?>