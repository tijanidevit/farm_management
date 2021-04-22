<?php 

include_once 'class/session.class.php';
$session = new Session();
$session->destroy_session('user');
echo "<script> location.href ='./'</script>";
?>