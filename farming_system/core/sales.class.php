<?php
    include_once 'db.class.php';

    class Sales extends DB{

        function add_sale($product_id,$quantity){
            return DB::execute("INSERT INTO sales(product_id,quantity) VALUES(?,?,?)", [$product_id,$quantity]);
        }
        function fetch_sales(){
            return DB::fetchAll("SELECT * FROM sales",[]);
        }
        function fetch_product_sales($product_id){
            return DB::fetchAll("SELECT * FROM sales WHERE product_id ? ",[$product_id]);
        }
        function fetch_farm_product_sales($farm_id){
            return DB::fetchAll("SELECT * FROM sales 
                JOIN products on sales.product_id = products.id
                JOIN farm on products.farm_id = farm.id
                WHERE farm_id ? ",[$farm_id]);
        }
        function fetch_sale($id){
            return DB::fetch("SELECT * FROM sales WHERE id = ? ",[$id] );
        }
        function delete_sale($id){
            return DB::execute("DELETE FROM sales WHERE id ? ",[$id]);
        }
    }
?>