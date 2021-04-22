<?php 
	include_once '../../core/session.class.php';
	include_once '../../core/products.class.php';
	include_once '../../core/core.function.php';

	$session = new Session();
	$product = new Products();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$farmer_id = $_SESSION['farmer']['id'];
		
		$product->delete_product($farmer_id,$id);
		header('location: ../products_list.php');
	}
?>
