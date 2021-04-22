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
		$pimg = $_POST['pimg'];
		$status = $_POST['status'];
		$id = $_POST['id'];
		$farmer_id = $_SESSION['farmer']['id'];

		if (isset($_FILES['product_image']) && $_FILES['product_image']['name'] != '' ) {
			$product_image = upload_file($_FILES['product_image'],'../../products/');
		}
		
		else{
			$product_image = $pimg;
		}

		
		if ($product->update_product($product_name,$price,$description,$product_image,$status,$farmer_id,$id)) {
			echo 1;
		}
		else{
			echo displayDanger("Unexpected Error");
		}
	}
?>
