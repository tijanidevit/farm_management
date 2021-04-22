<?php
    include_once 'connect.php'; 
    include_once 'session.php'; 
    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $password = MD5($_POST["password"]);
        $query = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $query->execute([$email,$password]);
        if($query->rowCount() > 0){
           set_session($email);
           echo 1;
        }
        else{
            echo 'Invalid Credentials'; 
        }
    }
     
    if(isset($_POST["s_email"])){
        $s_email = $_POST["s_email"];
        $fullname = $_POST["fullname"];
        $phone = $_POST["phone"];
        $bank_name = $_POST["bank_name"];
        $bank_account = $_POST["bank_account"];
        $s_password = MD5($_POST["s_password"]);
        $query = $db->prepare("SELECT * FROM users WHERE email = ? ");
        $query->execute([$s_email]);
        if($query->rowCount() > 0){
           echo 'This email already registered';
        }
        else{
            $insert_query = $db->prepare("INSERT INTO users(fullname,phone,email,password,bank_name,bank_account,balance) VALUES(?,?,?,?,?,?,?) ");
            if ($insert_query->execute([$fullname,$phone,$s_email,$s_password,$bank_name,$bank_account,0])) {        
                set_session($s_email);
                echo 1;
            }
            else{
                echo 'Unexpected Error! User not added'; 
            }
        }
    }
?>