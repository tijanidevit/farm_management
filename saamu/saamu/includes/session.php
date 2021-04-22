<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    session_start();
    
    function session_exist()
    {
        if(isset($_SESSION["user"])){
            echo '<script>window.location.href = "homepage.php";</script>';
        }
    }
    function session_unexist()
    {
        if(!isset($_SESSION["user"])){
            echo '<script>window.location.href = "index.php";</script>';
        }
    }
    function set_session($value)
    {   
        $_SESSION["user"] = $value;
    }
    
    function get_session()
    {   
        return $_SESSION["user"];
    }
?>