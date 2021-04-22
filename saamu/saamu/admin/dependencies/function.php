<?php
    include_once('../../includes/connect.php');
    $registerLink = "register.php";
    $loginLink = "index.php";
    function check_existence($key,$value)
    {
        Global $db;
        $query = $db->prepare("SELECT * FROM admin WHERE $key = ? ");
        $query->execute([$value]);
        if($query->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }

    }
    function get_username($key1,$value)
    {
        Global $db;
        $query = $db->prepare("SELECT * FROM admin WHERE $key1 = ?  ");
        $query->execute([$value]);
        $row = $query->fetch();
        return $row['username'];
    }

    function check_login($username,$password)
    {
        Global $db;
        $query = $db->prepare("SELECT * FROM admin WHERE username = ? AND password = ? ");
        $query->execute([$username,$password]);
        if($query->rowCount() > 0)
            return true;
        else
            return false;
    }
?>