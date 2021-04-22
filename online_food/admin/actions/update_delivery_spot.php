<?php
	echo action();

    function action()
    {
    	include_once '../../core/delivery_spots.class.php';
    	include_once '../../core/core.function.php';
	    $delivery_spot_obj = new Delivery_spots();
	    $delivery_spot = $_POST['delivery_spot'];
	    $id = $_POST['id'];

	    if ($delivery_spot_obj->check_edit_delivery_spots_existence($delivery_spot,$id)) {
	    	return displayWarning($delivery_spot.' already exists');
	    }
	    if ($delivery_spot_obj->update_delivery_spot($delivery_spot,$id)) {
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>