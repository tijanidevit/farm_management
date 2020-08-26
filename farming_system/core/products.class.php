<?php
    include_once 'db.class.php';

    class products extends DB{

        function add_product($farm_id,$product_name,$price,$description){
            return DB::execute("INSERT INTO products(farm_id,product_name,price,description) VALUES(?,?,?)", [$farm_id,$product_name,$price,$description]);
        }
        function fetch_products(){
            return DB::fetchAll("SELECT * FROM products",[]);
        }
        function fetch_producter_products($farm_id){
            return DB::fetchAll("SELECT * FROM products WHERE farm_id ? ",[$farm_id]);
        }
        function fetch_product($id){
            return DB::fetch("SELECT * FROM products WHERE id = ? ",[$id] );
        }
        function update_product($product_name,$price,$description,$id){
            return DB::execute("UPDATE products SET product_name =? ,price =?,description =? WHERE id = ? ", [$product_name,$price,$description,$id]);
        }
        function update_product_status($status,$id){
            return DB::execute("UPDATE products SET status =? WHERE id = ? ", [$status,$id]);
        }
        function delete_product($id){
            return DB::execute("DELETE FROM products WHERE id ? ",[$id]);
        }
    }
?>