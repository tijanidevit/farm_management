<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        include_once '../includes/connect.php';
        $query = $db->prepare("UPDATE withdraws SET processed = 1 WHERE withdraws_id = ? ")  ;
        if ($query->execute([$id])) {
            header('location: withdrawals.php');
        }      
    }
?>