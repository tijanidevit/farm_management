<?php
    include_once 'db.class.php';

    class Carts extends DB{

        function add_to_cart($customer_id,$food_package_id,$quantity){
            return DB::execute("INSERT INTO carts(customer_id,food_package_id,quantity) VALUES(?,?,?)", [$customer_id,$food_package_id,$quantity]);
        }
        function fetch_cart($customer_id){
            return DB::fetchAll("SELECT *,  carts.id FROM carts 
                JOIN  food_packages on food_packages.id = carts.food_package_id
                WHERE customer_id = ? ORDER BY carts.id ",[$customer_id] );
        }
        function remove_from_cart($id){
            return DB::execute("DELETE FROM carts WHERE id = ? ",[$id] );
        }
        function delete_customer_carts($customer_id){
            return DB::execute("DELETE FROM carts WHERE customer_id = ? ",[$customer_id] );
        }
        function customer_carts_num($customer_id){
            return DB::num_row("SELECT food_package_id FROM carts WHERE customer_id = ? ", [$customer_id]);
        }
        function check_cart($customer_id,$food_package_id){
            return DB::num_row("SELECT food_package_id FROM carts WHERE customer_id = ? AND food_package_id = ? ", [$customer_id,$food_package_id]);
        }
    }
?>