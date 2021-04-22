<?php
    include_once 'db.class.php';

    class Admins extends DB{

        function check_username($username){
            return DB::num_row("SELECT id FROM admins WHERE username = ? ", [$username]);
        }

        function login($username,$password){
            if (DB::num_row("SELECT id FROM admins WHERE username = ?   AND password = ? ", [$username,$password]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>