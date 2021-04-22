<?php
    include_once 'db.class.php';

    class Orders extends DB{

        function add_order($food_packages,$customer_id,$delivery_spot_id,$delivery_time){
            return DB::execute("INSERT INTO orders(food_packages,customer_id,delivery_spot_id,delivery_time) VALUES(?,?,?,?)", [$food_packages,$customer_id,$delivery_spot_id,$delivery_time]);
        }
        function fetch_orders(){
            return DB::fetchAll("SELECT orders.id,fullname,food_packages,delivery_spot,delivery_time,order_date,status FROM orders
                JOIN delivery_spots on delivery_spots.id = orders.delivery_spot_id
                JOIN customers on customers.id = orders.customer_id
                ORDER BY orders.id DESC ",[]);
        }

        function fetch_delivered_orders(){
            return DB::fetchAll("SELECT orders.id,fullname,food_packages,delivery_spot,delivery_time,order_date,status FROM orders
                JOIN delivery_spots on delivery_spots.id = orders.delivery_spot_id
                JOIN customers on customers.id = orders.customer_id
                WHERE status = 1
                ORDER BY orders.id DESC ",[]);
        }

        function fetch_undelivered_orders(){
            return DB::fetchAll("SELECT orders.id,fullname,food_packages,delivery_spot,delivery_time,order_date,status FROM orders
                JOIN delivery_spots on delivery_spots.id = orders.delivery_spot_id
                JOIN customers on customers.id = orders.customer_id
                WHERE status = 0
                ORDER BY orders.id DESC ",[]);
        }

        function fetch_customer_orders($customer_id){
            return DB::fetchAll("SELECT *, orders.id FROM orders
                JOIN customers on customers.id = orders.customer_id
                JOIN delivery_spots on delivery_spots.id = orders.delivery_spot_id
                WHERE customer_id = ?
                ORDER BY orders.id DESC

                ",[$customer_id]);
        }

        function fetch_order($order_id){
            return DB::fetch("SELECT * FROM orders
                JOIN customers on customers.id = orders.customer_id
                JOIN delivery_spots on delivery_spots.id = orders.delivery_spot_id
                WHERE order_id = ? ",[$order_id] );
        }
        function delete_order($order_id){
            return DB::execute("DELETE FROM orders WHERE order_id = ? ",[$order_id] );
        }
        function confirm_order_delivery($id){
            return DB::execute("UPDATE orders SET status = 1 WHERE id = ? ", [$id]);
        }
       
        function orders_num(){
            return DB::num_row("SELECT order_id FROM orders ", []);
        }

        function check_order_existence($order){
            if (DB::num_row("SELECT order_id FROM orders WHERE order = ? ", [$order]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
       

       #order Types
        function fetch_food_packages(){
            return DB::fetchAll("SELECT * FROM food_packages",[]);
        }

        function fetch_food_packages_orders($food_package_id){
            return DB::fetchAll("SELECT * FROM orders WHERE food_package = ? ",[$food_package_id]);
        }
    }
?>