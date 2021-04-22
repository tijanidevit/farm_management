<?php
	echo action();

    function action()
    {
    	include_once '../../core/food_items.class.php';
    	include_once '../../core/core.function.php';
	    $food_item_obj = new food_items();
	    $food_item = $_POST['food_item'];
	    $id = $_POST['id'];

	    if ($food_item_obj->check_edit_food_item_existence($food_item,$id)) {
	    	return displayWarning($food_item.' already exists');
	    }
	    if ($food_item_obj->update_food_item($food_item,$id)) {
	    	return 1;
	    }
	    else{
	    	return displayError('Unexpected error');
	    }
	    
    }
?>