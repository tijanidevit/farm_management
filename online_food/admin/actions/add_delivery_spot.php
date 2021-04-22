<?php
	echo action();

    function action()
    {
    	include_once '../../core/delivery_spots.class.php';
    	include_once '../../core/core.function.php';
	    $delivery_spot_obj = new Delivery_spots();
	    $delivery_spot = $_POST['delivery_spot'];

	    if ($delivery_spot_obj->check_delivery_spots_existence($delivery_spot)) {
	    	return displayWarning($delivery_spot.' already exists');
	    }
	    if ($delivery_spot_obj->add_delivery_spot($delivery_spot)) {
	    	return 1;
	    	//return displaySuccess($delivery_spot.' successfully added');
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>