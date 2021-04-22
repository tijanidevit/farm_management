<?php 
     include_once 'connect.php'; 
     include_once 'session.php'; 
      
     if(isset($_POST["amount"])){
        $amount = $_POST["amount"]/100;
        $user_id = $_POST["user_id"];
        $balance = $_POST["balance"];
        $ref_id = 'SA-'.$user_id.'-'.rand(1000000,9999999 );
        $date = date('d/m/y');        

        $insert_query = $db->prepare("INSERT INTO savings(user_id,reference_id,amount,date) VALUES(?,?,?,?) ");
        if ($insert_query->execute([$user_id,$ref_id,$amount,$date])) {        
            $new_balance = $balance + $amount;
            $update_query = $db->prepare("UPDATE users SET balance = ? WHERE user_id = ? ");
            $update_query->execute([$new_balance,$user_id]);
            echo 1;
        } 
        else{
            echo 'Unexpected Error! User not added'; 
        }
    }
    else{
        echo 'User not added'; 
    }
?>