<?php
	echo action();

    function action()
    {
    	include_once '../core/carts.class.php';
    	include_once '../core/core.function.php';
	    $cart_obj = new Carts();
	    $quantity = 1; //default
	    $customer_id = $_POST['customer_id'];
	    $food_package_id = $_POST['food_package_id'];
	    $quantity = $_POST['quantity'];

	    if ($cart_obj->check_cart($customer_id,$food_package_id) > 0) {
	    	return 'Food package already added to cart';
	    }
	    if ($cart_obj->add_to_cart($customer_id,$food_package_id,$quantity)) {
	    	return 'Food package added to cart successfully';
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>