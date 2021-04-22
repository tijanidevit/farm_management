<?php
    include_once 'db.class.php';

    class Customers extends DB{

        function register_customer($fullname,$email,$password,$address){
            return DB::execute("INSERT INTO customers(`fullname`, `email`, `password`, `address`) VALUES(?,?,?,?)", [$fullname,$email,$password,$address]);
        }
        function fetch_customers(){
            return DB::fetchAll("SELECT * FROM customers",[]);
        }
        function fetch_customer($email){
            return DB::fetch("SELECT * FROM customers WHERE email = ? OR id = ? ",[$email,$email] );
        }
        function fetch_customer_id($email){
            $req = DB::fetch("SELECT * FROM customers WHERE email = ? ",[$email] );
            return $req['id'];
        }
        function update_customer($fullname,$email,$address,$id){
            return DB::execute("UPDATE customers SET fullname =? ,username =?,email =?,address =? WHERE id = ? ", [$fullname,$email,$address,$id]);
        }
        function update_password($password,$id){
            return DB::execute("UPDATE customers SET password =? WHERE id = ? ", [$password,$id]);
        }
        function customers_num(){
            return DB::num_row("SELECT id FROM customers ", []);
        }
        function check_email($email){
            return DB::num_row("SELECT id FROM customers WHERE email = ? ", [$email]);
        }
        function customer_login($email,$password){
            if (DB::num_row("SELECT id FROM customers WHERE email = ?   AND password = ? ", [$email,$password]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>