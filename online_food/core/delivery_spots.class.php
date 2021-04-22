<?php
    include_once 'db.class.php';

    class Delivery_spots extends DB{

        function add_delivery_spot($delivery_spot){
            return DB::execute("INSERT INTO delivery_spots(delivery_spot) VALUES(?)", [$delivery_spot,]);
        }
        function fetch_delivery_spots(){
            return DB::fetchAll("SELECT * FROM delivery_spots ORDER BY delivery_spot",[]);
        }
        function fetch_delivery_spot($id){
            return DB::fetch("SELECT * FROM delivery_spots WHERE id = ? ",[$id]);
        }
        function delete_delivery_spot($id){
            return DB::execute("DELETE FROM delivery_spots WHERE id = ? ",[$id] );
        }
        function update_delivery_spot($delivery_spot,$id){
            return DB::execute("UPDATE delivery_spots SET delivery_spot = ? WHERE id = ? ", [$delivery_spot,$id]);
        }
       
        function delivery_spots_num(){
            return DB::num_row("SELECT delivery_spot FROM delivery_spots ", []);
        }

        function check_delivery_spots_existence($delivery_spot){
            if (DB::num_row("SELECT delivery_spot FROM delivery_spots WHERE delivery_spot = ? ", [$delivery_spot]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }

        function check_edit_delivery_spots_existence($delivery_spot,$id){
            if (DB::num_row("SELECT delivery_spot FROM delivery_spots WHERE delivery_spot = ? AND id <> ? ", [$delivery_spot,$id]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
       
    }
?>