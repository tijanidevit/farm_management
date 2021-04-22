<?php
	echo action();

    function action()
    {
    	include_once '../core/orders.class.php';
    	include_once '../core/carts.class.php';
    	include_once '../core/core.function.php';
	    $cart_obj = new Carts();
	    $order_obj = new Orders();
	    $customer_id = $_POST['customer_id'];
	    $food_packages = $_POST['food_packages'];
	    $delivery_time = $_POST['delivery_time'];
	    $delivery_spot_id = $_POST['delivery_spot_id'];


	    if ( !($delivery_time >= '08:00:00' && $delivery_time <= '17:00:00' ) ) {
	    	return displayWarning('We are closed at this time. We are opened during 08 am - 05 pm');
	    }

	    if ( $delivery_time <= date("h:i")) {
	    	return displayWarning('You cannot order at a past time');
	    }

	    if ($order_obj->add_order($food_packages,$customer_id,$delivery_spot_id,$delivery_time)) {
	    	$cart_obj->delete_customer_carts($customer_id);
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>