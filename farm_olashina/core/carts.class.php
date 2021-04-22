<?php
    include_once 'db.class.php';

    class Carts extends DB{

        function add_to_cart($customer_id,$product_id){
            return DB::execute("INSERT INTO carts(customer_id,product_id) VALUES(?,?)", [$customer_id,$product_id]);
        }
        function fetch_cart($customer_id){
            return DB::fetchAll("SELECT *, product_id,  carts.id FROM carts 
                JOIN  products on products.id = carts.product_id
                WHERE customer_id = ? ORDER BY carts.id ",[$customer_id] );
        }
        function remove_from_cart($id){
            return DB::execute("DELETE FROM carts WHERE id = ? ",[$id] );
        }
        function delete_customer_carts($customer_id){
            return DB::execute("DELETE FROM carts WHERE customer_id = ? ",[$customer_id] );
        }
        function customer_carts_num($customer_id){
            return DB::num_row("SELECT product_id FROM carts WHERE customer_id = ? ", [$customer_id]);
        }
        function check_cart($customer_id,$product_id){
            return DB::num_row("SELECT product_id FROM carts WHERE customer_id = ? AND product_id = ? ", [$customer_id,$product_id]);
        }
    }
?>