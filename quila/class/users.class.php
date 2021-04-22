<?php
    include_once 'db.class.php';

    class Users extends DB{

        function register_user($firstname,$othernames,$username,$password,$email,$verification_key){
            return DB::execute("INSERT INTO users(firstname,othernames,username,password,email,verification_key) VALUES(?,?,?,?,?,?)", [$firstname,$othernames,$username,$password,$email,$verification_key]);
        }
        function activate_user($verification_key,$user_id){
            return DB::execute("UPDATE users SET status = 1 , verification_key = '' WHERE user_id = ? AND verification_key = ?  ", [$verification_key,$user_id]);
        }
        function verify_user_activation_key($verification_key,$user_id){
            return  DB::num_row("SELECT user_id FROM users WHERE user_id = ? AND verification_key = ? ", [$user_id,$verification_key]);
        }
        function fetch_users(){
            return DB::fetchAll("SELECT * FROM users",[]);
        }
        function fetch_user($username){
            return DB::fetch("SELECT * FROM users WHERE username = ? OR email = ? ",[$username,$username] );
        }
        function fetch_user_rating($user_id){
            return DB::fetch("SELECT user_rating FROM users WHERE user_id = ? ",[$user_id] );
        }
        function update_user($firstname,$othernames,$username,$email,$user_id){
            return DB::execute("UPDATE users SET firstname =? ,othernames =? ,username =? ,email =? WHERE user_id = ? ", [$firstname,$othernames,$username,$email,$user_id]);
        }

        function update_user_rating($user_rating,$user_id){
            return DB::execute("UPDATE users SET user_rating = ? WHERE user_id = ? ", [$user_rating,$user_id]);
        }
        function update_password($password,$user_id){
            return DB::execute("UPDATE users SET password =? WHERE user_id = ? ", [$password,$user_id]);
        }
        function update_profile_image($profile_image,$user_id){
            return DB::execute("UPDATE users SET profile_image =? WHERE user_id = ? ", [$profile_image,$user_id]);
        }
        function users_num(){
            return DB::num_row("SELECT user_id FROM users ", []);
        }

        function check_email($email){
            return DB::num_row("SELECT user_id FROM users WHERE email = ? ", [$email]);
        }
        function check_username($username){
            return DB::num_row("SELECT user_id FROM users WHERE username = ? ", [$username]);
        }

        function email_login($email,$password){
            return DB::num_row("SELECT user_id FROM users WHERE email = ?   AND password = ? ", [$email,$password]);
        }
        function username_login($username,$password){
            return DB::num_row("SELECT user_id FROM users WHERE username = ?   AND password = ? ", [$username,$password]);
        }
        function user_login($username,$password){
            if (($this->email_login($username,$password) > 0) || ($this->username_login($username,$password) > 0)) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>