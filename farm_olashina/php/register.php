<?php 
	include_once 'core/customers.class.php';
	include_once 'core/core.function.php';

	$customers = new customers();

	if (isset($_POST['Remail'])) {
		$email = $_POST['Remail'];
		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$password = md5($_POST['password']);

		if ($customers->register_customer($fullname,$email,$password,$address)) {
			$customer = $customers->fetch_customer($email);
			$_SESSION['farm_customer'] = $customer;
		
			echo '<script> location.href= "shop.php"; </script>';
		}
		else{
			$err = "Unexpected Error";
		}
	}
?>