<?php
    include_once 'db.class.php';

    class Food_packages extends DB{

        function add_food_package($package_name,$package_image,$price,$description){
            return DB::execute("INSERT INTO food_packages(package_name,package_image,price,description) VALUES(?,?,?,?)", [$package_name,$package_image,$price,$description]);
        }
        function fetch_food_packages(){
            return DB::fetchAll("SELECT * FROM food_packages ORDER BY food_packages.id DESC ",[]);            
        }
        function fetch_limit_food_packages($limit){
            return DB::fetchAll("SELECT * FROM food_packages ORDER BY food_packages.id DESC LIMIT $limit",[]);            
        }

        function fetch_food_package($id){
            return DB::fetch("SELECT * FROM food_packages WHERE id = ? ",[$id] );
        }
        
        function delete_food_package($package_name){
            return DB::execute("DELETE FROM food_packages WHERE package_name = ? ",[$package_name] );
        }
        function update_food_package($package_name,$price,$description,$id){
            return DB::execute("UPDATE food_packages SET package_name = ?, price = ?, description = ? WHERE id = ? ", [$package_name,$price,$description,$id]);
        }
       
        function food_packages_num(){
            return DB::num_row("SELECT package_name FROM food_packages ", []);
        }

        function check_food_package_existence($package_name){
            if (DB::num_row("SELECT package_name FROM food_packages WHERE package_name = ? ", [$package_name]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }

        function check_edit_food_package_existence($package_name,$id){
            if (DB::num_row("SELECT package_name FROM food_packages WHERE package_name = ? AND id <> ? ", [$package_name,$id]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>