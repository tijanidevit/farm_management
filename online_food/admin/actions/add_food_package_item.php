<?php
	echo action();

    function action()
    {
    	include_once '../../core/food_package_items.class.php';
    	include_once '../../core/core.function.php';
	    $food_package_item_obj = new Food_package_items();
	    $food_package_id = $_POST['food_package_id'];
	    $food_item_id = $_POST['food_item_id'];


	    if ($food_package_item_obj->check_food_package_item_existence($food_package_id,$food_item_id)) {
	    	return displayWarning('Food item already added');
	    }
	    
	    if ($food_package_item_obj->add_food_package_item($food_package_id,$food_item_id)) {
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>