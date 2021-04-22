<?php
    include_once 'db.class.php';

    class Food_package_items extends DB{

        function add_food_package_item($food_package_id,$food_item_id){
            return DB::execute("INSERT INTO food_package_items(food_package_id,food_item_id) VALUES(?,?)", [$food_package_id,$food_item_id]);
        }
        function fetch_food_package_items($food_package_id){
            return DB::fetchAll("SELECT food_item, food_package_items.id FROM food_package_items 
                JOIN  food_items on food_items.id = food_package_items.food_item_id
                WHERE food_package_id = ? ORDER BY food_item ",[$food_package_id] );
        }
        function delete_food_package_item($id){
            return DB::execute("DELETE FROM food_package_items WHERE id = ? ",[$id] );
        }
        function food_package_items_num(){
            return DB::num_row("SELECT food_package_id FROM food_package_items ", []);
        }
        function check_food_package_item_existence($food_package_id,$food_item_id){
            return DB::num_row("SELECT food_package_id FROM food_package_items WHERE food_package_id = ? AND food_item_id = ? ", [$food_package_id,$food_item_id]);
        }
    }
?>