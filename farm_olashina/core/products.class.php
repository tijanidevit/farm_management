<?php
    include_once 'db.class.php';

    class Products extends DB{

        function add_product($farmer_id,$product_name,$price,$description,$product_image){
            return DB::execute("INSERT INTO products(farmer_id,product_name,price,description,product_image) VALUES(?,?,?,?,?)", [$farmer_id,$product_name,$price,$description,$product_image]);
        }
        function fetch_products(){
            return DB::fetchAll("SELECT * FROM products",[]);
        }
        function fetch_farmer_products($farmer_id){
            return DB::fetchAll("SELECT * FROM products WHERE farmer_id = ? ",[$farmer_id]);
        }
        function fetch_product($id){
            return DB::fetch("SELECT *,products.id FROM products JOIN farmers on farmers.id = products.farmer_id  WHERE products.id = ? ",[$id] );
        }
        function update_product($product_name,$price,$description,$product_image,$status,$farmer_id,$id){
            return DB::execute("UPDATE products SET product_name =? ,price =?,description =?, product_image =?, status = ? WHERE farmer_id = ? AND id = ? ", [$product_name,$price,$description,$product_image,$status,$farmer_id,$id]);
        }
        function update_product_status($status,$id){
            return DB::execute("UPDATE products SET status =? WHERE id = ? ", [$status,$id]);
        }
        function delete_product($farmer_id,$id){
            return DB::execute("DELETE FROM products WHERE farmer_id = ? AND id = ? ",[$farmer_id,$id]);
        }
    }
?>