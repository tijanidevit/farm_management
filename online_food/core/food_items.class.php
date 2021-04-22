<?php
    include_once 'db.class.php';

    class Food_items extends DB{

        function add_food_item($food_item){
            return DB::execute("INSERT INTO food_items(food_item) VALUES(?)", [$food_item]);
        }
        function fetch_food_items(){
            return DB::fetchAll("SELECT * FROM food_items ORDER BY food_item",[]);
        }
        function fetch_food_item($id){
            return DB::fetch("SELECT * FROM food_items WHERE id = ? ",[$id]);
        }
        function delete_food_item($id){
            return DB::execute("DELETE FROM food_items WHERE id = ? ",[$id] );
        }
        function update_food_item($food_item,$id){
            return DB::execute("UPDATE food_items SET food_item = ? WHERE id = ? ", [$food_item,$id]);
        }
       
        function food_items_num(){
            return DB::num_row("SELECT food_item FROM food_items ", []);
        }

        function check_food_item_existence($food_items){
            if (DB::num_row("SELECT food_item FROM food_items WHERE food_item = ? ", [$food_items]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }

        function check_edit_food_item_existence($food_items,$id){
            if (DB::num_row("SELECT food_item FROM food_items WHERE food_item = ? AND id <> ? ", [$food_items,$id]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
       
    }
?>