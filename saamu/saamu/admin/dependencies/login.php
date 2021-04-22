<?php
    include_once('function.php');    
    include_once('session.php');
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = MD5($_POST['password']);
        if(check_login($username,$password)){
            set_session($username);
            echo 1;
        }
        else{
            echo "Invalid Credentials";
        }
    }
?>