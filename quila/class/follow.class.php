<?php
    include_once 'db.class.php';

    class Follows extends DB{

        function follow_user($follower_id,$following_id){
            return DB::execute("INSERT INTO follow(follower_id,following_id) VALUES(?,?)", [$follower_id,$following_id]);
        }
        function fetch_follow(){
            return DB::fetchAll("SELECT * FROM follow",[]);
        }
        function fetch_user_followers($following_id){
            return DB::fetch("SELECT * FROM follow WHERE following_id = ?",[$following_id] );
        }

        function fetch_user_following($follower_id){
            return DB::fetch("SELECT * FROM follow WHERE follower_id = ?",[$follower_id] );
        }
    }
?>