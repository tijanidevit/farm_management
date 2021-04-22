<?php
    include_once '../../core/orders.class.php';

    $order_obj = new Orders();
    $id = $_GET['id'];
    $orders = $order_obj->confirm_order_delivery($id);

  	echo "<script>window.location.href = '../orders.php'; </script>";

?>