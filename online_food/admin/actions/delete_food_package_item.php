<?php
$id = $_GET['id'];
$p_id = $_GET['p_id'];
include_once '../../core/food_package_items.class.php';
$food_package_item_obj = new Food_package_items();

$food_package_item_obj->delete_food_package_item($id);

header('location: ../add_food_package_item.php?id='.$p_id);

?>