<?php
	include_once '../../core/food_items.class.php';
    $food_item_obj = new food_items();
    $id = $_GET['id'];

    $food_item_obj->delete_food_item($id);
	
	header('location: ../food_items.php');
?>