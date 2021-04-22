<?php
    include_once 'db.class.php';

    class Main_category extends DB{

        function add_main_category($main_category,$main_category_description,$main_category_icon){
            return DB::execute("INSERT INTO main_categories(main_category,main_category_description,main_category_icon) VALUES(?,?,?,?)", [$main_category,$main_category_description,$main_category_icon]);
        }
        function delete_main_category($main_category_id){
            return DB::execute("DELETE main_categories WHERE main_category_id = ? ", [$main_category_id]);
        }
        function fetch_main_categories(){
            return DB::fetchAll("SELECT * FROM main_categories ORDER BY main_category ",[]);
        }
        function fetch_main_category($main_category_id){
            return DB::fetch("SELECT * FROM main_categories WHERE main_category_id = ? ",[$main_category_id] );
        }
        function update_main_category($main_category_id,$series_id,$contest_id,$exercise_id,$topic,$content,$media){
            return DB::execute("UPDATE main_categories SET main_category_id =? ,series_id =? ,contest_id =? ,exercise_id =? ,topic =? ,content =? ,media =? WHERE main_category_id = ? ", [$main_category_id,$series_id,$contest_id,$exercise_id,$topic,$content,$media,$main_category_id]);
        }
        function verify_main_category_existence($main_category){
            return DB::num_row("SELECT main_category_id FROM main_categories WHERE main_category = ? ", [$main_category]);
        }
        function main_categories_num(){
            return DB::num_row("SELECT main_category_id FROM main_categories ", []);
        }

        #sub category belonging to main_category
        function main_category_sub_num($main_category_id){
            return DB::num_row("SELECT main_category_id FROM sub_categories WHERE sub_categories.main_category_id = ? ", [$main_category_id]);
        }
    }
?>