<?php 
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('location: login.php');
    }
    include_once '../php/conn.php';
    if (!isset($_GET['withdrawal_id'])) {
    	header('location: withdrawals.php');
    }
    $withdrawal_id = $_GET['withdrawal_id'];
    $update_user_withdrawals = $conn->query("UPDATE user_withdrawals set status = 1 where withdrawal_id = '$withdrawal_id' ");

	header('location: withdrawals.php');
    
?> 