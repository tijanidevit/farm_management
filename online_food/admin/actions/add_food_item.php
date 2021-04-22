<?php
	echo action();

    function action()
    {
    	include_once '../../core/food_items.class.php';
    	include_once '../../core/core.function.php';
	    $food_item_obj = new Food_items();
	    $food_item = $_POST['food_item'];

	    if ($food_item_obj->check_food_item_existence($food_item)) {
	    	return displayWarning($food_item.' already exists');
	    }
	    if ($food_item_obj->add_food_item($food_item)) {
	    	return 1;
	    	//return displaySuccess($food_item.' successfully added');
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>