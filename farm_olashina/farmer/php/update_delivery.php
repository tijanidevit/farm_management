<?php 
	include_once '../../core/orders.class.php';
	$order_obj = new Orders();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		if ($order_obj->set_as_delivered($id))
			header('location: ../orders.php');
		else
			die('d');
	}
?>
