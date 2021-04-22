<?php
	session_start();
	echo action();

    function action()
    {
    	include_once '../core/carts.class.php';
	    $cart_obj = new Carts();
	    if (!isset($_SESSION['farm_customer'])) {
	    	return 0;
	    }
	    else{
	    	$farm_customer_id = $_SESSION['farm_customer']['id'];
	    	return $cart_obj->customer_carts_num($farm_customer_id);
		}
	    
    }
?>