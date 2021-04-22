<?php
	echo action();

    function action()
    {
    	include_once '../../core/food_packages.class.php';
    	include_once '../../core/core.function.php';
	    $food_package_obj = new Food_packages();
	    $package_name = $_POST['package_name'];
	    $price = $_POST['price'];
	    $id = $_POST['id'];
	    $description = $_POST['description'];


	    if ($food_package_obj->check_edit_food_package_existence($package_name,$id)) {
	    	return displayWarning($package_name.' already exists');
	    }
	    if ($food_package_obj->update_food_package($package_name,$price,$description,$id)) {
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>