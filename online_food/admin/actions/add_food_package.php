<?php
	echo action();

    function action()
    {
    	include_once '../../core/food_packages.class.php';
    	include_once '../../core/core.function.php';
	    $food_package_obj = new Food_packages();
	    $package_name = $_POST['package_name'];
	    $price = $_POST['price'];
	    $description = $_POST['description'];


	    if ($food_package_obj->check_food_package_existence($package_name)) {
	    	return displayWarning($package_name.' already exists');
	    }
	    
	    $package_image = upload_file($_FILES['package_image'],'../../images/food_packages/');
	    if ($food_package_obj->add_food_package($package_name,$package_image,$price,$description)) {
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>