<?php 
	include_once '../core/session.class.php';
	include_once '../core/carts.class.php';
	include_once '../core/core.function.php';

	$carts = new carts();
	$session = new Session();

	if (isset($_POST['id'])) {
		$product_id = $_POST['id'];
		$customer_id = $_SESSION['farm_customer']['id'];

		if ($carts->check_cart($customer_id,$product_id) < 1) {
			if ($carts->add_to_cart($customer_id,$product_id)) {
				echo "Prodduct Added Successfully";
			}
			else{
				echo "Unexpected Error";
			}
		}
		else
		{
			echo "You have added this product to cart before";
		}
	}
?>