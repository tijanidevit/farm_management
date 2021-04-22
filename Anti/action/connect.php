<?php 
 	$host = 'localhost';
    $dbname = 'anti';
    $password = '';
    $username = 'root';

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>