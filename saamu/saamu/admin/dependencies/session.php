<?php
    session_start();
    function session_exist()
    {
        if(isset($_SESSION["admin"])){
            header('location: homepage.php');
        }
    }
    function session_unexist()
    {
        if(!isset($_SESSION["admin"])){
            header('location: index.php');
        }
    }
    function set_session($value)
    {   
        $_SESSION["admin"] = $value;
    }
    
    function get_session()
    {   
        return $_SESSION["admin"];
    }
?>