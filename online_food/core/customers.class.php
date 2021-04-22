<?php
    include_once 'db.class.php';

    class Customers extends DB{

        function register_customer($fullname,$username,$phone,$image,$password){
            return DB::execute("INSERT INTO customers(fullname,username,phone,image,password) VALUES(?,?,?,?,?)", [$fullname,$username,$phone,$image,$password]);
        }
        function fetch_customers(){
            return DB::fetchAll("SELECT * FROM customers",[]);
        }
        function fetch_customer($username){
            return DB::fetch("SELECT * FROM customers WHERE username = ? OR id = ? ",[$username,$username] );
        }
        function update_customer($fullname,$othernames,$username,$id){
            return DB::execute("UPDATE customers SET fullname =? ,othernames =? ,username =? WHERE id = ? ", [$fullname,$othernames,$username,$id]);
        }
        function update_password($password,$id){
            return DB::execute("UPDATE customers SET password =? WHERE id = ? ", [$password,$id]);
        }
        function update_profile_image($profile_image,$id){
            return DB::execute("UPDATE customers SET profile_image =? WHERE id = ? ", [$profile_image,$id]);
        }
        function customers_num(){
            return DB::num_row("SELECT id FROM customers ", []);
        }

        function check_username($username){
            return DB::num_row("SELECT id FROM customers WHERE username = ? ", [$username]);
        }

        function check_phone($phone){
            return DB::num_row("SELECT id FROM customers WHERE phone = ? ", [$phone]);
        }
        function login($username,$password){
            if (DB::num_row("SELECT id FROM customers WHERE username = ?   AND password = ? ", [$username,$password]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>