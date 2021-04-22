<?php
	session_start();
	include_once '../core/orders.class.php';
	include_once '../core/carts.class.php';
	include_once '../core/core.function.php';
    $cart_obj = new Carts();
    $order_obj = new Orders();


    $carts = $cart_obj->fetch_cart($_SESSION['farm_customer']['id']);

    foreach ($carts as $cart) {

        $customer_id = $_SESSION['farm_customer']['id'];
        	
    	if ($order_obj->add_order($customer_id,$cart['product_id'],1)) {
        	$cart_obj->delete_customer_carts($customer_id);
        	echo 1;
        }
        else{
        	echo displayError('Unexpected error');
        }
    }
?>