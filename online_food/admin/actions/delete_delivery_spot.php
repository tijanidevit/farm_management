<?php
	include_once '../../core/delivery_spots.class.php';
    $delivery_spot_obj = new Delivery_spots();
    $id = $_GET['id'];

    $delivery_spot_obj->delete_delivery_spot($id);
	
	header('location: ../delivery_spots.php');
?>