<?php
	echo action();

    function action()
    {
    	include_once '../core/carts.class.php';
	    $cart_obj = new Carts();
	    $id = $_POST['id'];

	    if($cart_obj->remove_from_cart($id))
	    	return 'Deleted successfully';  
    }
?>