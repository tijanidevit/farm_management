<?php 
     include_once 'connect.php'; 
     include_once 'session.php'; 
      
     if(isset($_POST["amount"])){
        $amount = $_POST["amount"];
        $user_id = $_POST["user_id"];
        $balance = $_POST["balance"];
        if ($balance < $amount) {
            echo "Withdrawal not processed. You can not withdraw more than #".$balance;
        }
        else{
            $ref_id = 'WA-'.$user_id.'-'.rand(1000000,9999999);
            $date = date('d/m/y');        

            $insert_query = $db->prepare("INSERT INTO withdraws(user_id,reference_id,amount,date,processed) VALUES(?,?,?,?,?) ");
            if ($insert_query->execute([$user_id,$ref_id,$amount,$date,0])) {        
                $new_balance = $balance - $amount;
                $update_query = $db->prepare("UPDATE users SET balance = ? WHERE user_id = ? ");
                $update_query->execute([$new_balance,$user_id]);
                echo 1;
            } 
            else{
                echo 'Unexpected Error! Withdraw not processed'; 
            }
        }
    }
?>