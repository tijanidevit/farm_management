<?php 
	include_once '../../core/session.class.php';
	include_once '../../core/products.class.php';
	include_once '../../core/core.function.php';

	$session = new Session();
	$product = new Products();

	if (isset($_POST['product_name'])) {
		$product_name = $_POST['product_name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$farmer_id = $_SESSION['farmer']['id'];
		$product_image = upload_file($_FILES['product_image'],'../../products/');

		
		if ($product->add_product($farmer_id,$product_name,$price,$description,$product_image)) {
			echo 1;
		}
		else{
			echo displayDanger("Unexpected Error");
		}
	}
?>
