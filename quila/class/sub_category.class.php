<?php
    include_once 'db.class.php';

    class Sub_category extends DB{

        function add_sub_category($main_category_id,$sub_category,$sub_category_description,$sub_category_icon){
            return DB::execute("INSERT INTO sub_categories(main_category_id,sub_category,category_description,category_icon) VALUES(?,?,?,?)", [$main_category_id,$sub_category,$sub_category_description,$sub_category_icon]);
        }
        function delete_sub_category($sub_category_id){
            return DB::execute("DELETE sub_categories WHERE sub_category_id = ? ", [$sub_category_id]);
        }
        function fetch_sub_categories($main_category_id){
            return DB::fetchAll("SELECT * FROM sub_categories WHERE main_category_id = ? ORDER BY sub_category ",[$main_category_id]);
        }
        function fetch_sub_category($sub_category_id){
            return DB::fetch("SELECT * FROM sub_categories WHERE sub_category_id = ? ",[$sub_category_id] );
        }
        function verify_sub_category_existence($sub_category){
            return DB::num_row("SELECT category_id FROM sub_categories WHERE sub_category = ? ", [$sub_category]);
        }

        #category likes
        function like_sub_category($user_id,$sub_category_id){
            return DB::execute("INSERT INTO sub_category_likes(user_id,sub_category_id) VALUES(?,?)", [$user_id,$sub_category_id]);
        }
        function unlike_sub_category($user_id,$sub_category_id){
            return DB::execute("DELETE FROM sub_category_likes WHERE user_id = ? AND sub_category_id = ?  ", [$user_id,$sub_category_id]);
        }
        function category_sub_likes_num($sub_category_id){
            return DB::num_row("SELECT sub_category_like_id FROM sub_category_likes WHERE category_id = ?",[$sub_category_id]);
        }
        function user_sub_likes_num($user_id,$sub_category_id){
            return DB::num_row("SELECT sub_category_like_id FROM sub_category_likes WHERE user_id = ? AND sub_category_id = ?",[$user_id,$sub_category_id]);
        }

        #post belonging to category
        function sub_category_posts_num($sub_category_id){
            return DB::num_row("SELECT post_id FROM posts WHERE posts.sub_category_id = ? ", [$sub_category_id]);
        }
        function fetch_sub_category_posts($sub_category_id){
            return DB::fetchAll("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id
            WHERE sub_categories.sub_category_id = ? ORDER BY post_id DESC LIMIT 10 ", [$sub_category_id]);
        }

        function fetch_more_sub_category_posts($sub_category_id,$last_id){
            return DB::fetchAll("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id
            WHERE sub_categories.sub_category_id = ? and post_id < ? ORDER BY post_id DESC LIMIT 10 ", [$sub_category_id,$last_id]);
        }
        function fetch_sub_category_single_post($sub_category_id){
            return DB::fetch("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id
            WHERE sub_categories.sub_category_id = ? ORDER BY post_rating DESC ", [$sub_category_id]);
        }
        
        #category rating
        function update_sub_category_rating($sub_category_id,$sub_category_rating){
            return DB::execute("UPDATE sub_categories SET category_rating =? WHERE category_id = ? ", [$sub_category_rating,$sub_category_id]);
        }
    }
?>