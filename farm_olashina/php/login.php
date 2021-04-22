<?php 
	include_once 'core/customers.class.php';
	include_once 'core/core.function.php';

	$customers = new customers();

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if ($customers->customer_login($email,$password)) {
			$customer = $customers->fetch_customer($email);

			$_SESSION['farm_customer'] = $customer;
			header('location: ./');
		}
		else{
			$err = "Invalid Credentials";
		}
	}
?>