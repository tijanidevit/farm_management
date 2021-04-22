<?php
    include_once 'db.class.php';

    class Posts extends DB{

        function add_post($user_id,$sub_category_id,$topic,$content,$media){
            return DB::execute("INSERT INTO posts(user_id,sub_category_id,topic,content,media) VALUES(?,?,?,?,?)", [$user_id,$sub_category_id,$topic,$content,$media]);
        }
        function delete_post($post_id){
            return DB::execute("DELETE FROM posts WHERE post_id = ? ", [$post_id]);
        }
        function fetch_recent_posts(){
            return DB::fetchAll("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id ORDER BY post_id DESC LIMIT 42 ",[]);
        }
        function fetch_top_posts(){
            return DB::fetchAll("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id ORDER BY post_rating DESC LIMIT 42 ",[]);
        }
        function fetch_follow_posts($user_id){
            return DB::fetch("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id WHERE posts.user_id = ? ORDER BY post_id DESC ",[$user_id]);
        }
        function fetch_post($post_id){
            return DB::fetch("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id  WHERE post_id = ? ",[$post_id] );
        }
        function fetch_related_post($sub_category_id,$post_id){
            return DB::fetchAll("SELECT * FROM posts 
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id  WHERE sub_categories.sub_category_id = ? AND posts.post_id <> ? ORDER BY post_id DESC LIMIT 4 ",[$sub_category_id,$post_id] );
        }
        function update_post($post_id,$sub_category_id,$topic,$content,$media){
            return DB::execute("UPDATE posts SET sub_category_id =? ,topic =? ,content =? ,media =? WHERE post_id = ? ", [$sub_category_id,$topic,$content,$media,$post_id]);
        }
        function verify_post_existence($topic,$user_id,$sub_category_id){
            return DB::num_row("SELECT post_id FROM posts WHERE topic = ? AND user_id = ? AND sub_category_id = ? ", [$topic,$user_id,$sub_category_id]);
        }
        function posts_num(){
            return DB::num_row("SELECT post_id FROM posts ", []);
        }

        #post belonging to users
        function user_posts_num($user_id){
            return DB::num_row("SELECT post_id FROM posts WHERE user_id = ? ", [$user_id]);
        }
        function fetch_user_posts($user_id){
            return DB::fetchAll("SELECT * FROM posts
            JOIN users on users.user_id = posts.user_id
            JOIN sub_categories on sub_categories.sub_category_id = posts.sub_category_id 
            WHERE posts.user_id = ? ", [$user_id]);
        }

        #post comments
        function comment_on_post($post_id,$commenter_id,$comment){
            return DB::execute("INSERT INTO comments(post_id,commenter_id,comment) VALUES(?,?,?)", [$post_id,$commenter_id,$comment]);
        }
        function delete_post_comment($comment_id){
            return DB::execute("DELETE FROM comments WHERE comment_id = ? ", [$comment_id]);
        }
        function fetch_post_comments($post_id){
            return DB::fetchAll("SELECT * FROM comments JOIN users on users.user_id = comments.commenter_id WHERE comments.post_id = ? ORDER BY comment_id DESC LIMIT 5 ",[$post_id]);
        }
        function fetch_more_comments($post_id,$last_id){
            return DB::fetchAll("SELECT * FROM comments JOIN users on users.user_id = comments.commenter_id WHERE comments.post_id = ? AND comment_id < ? ORDER BY comment_id DESC LIMIT 5 ",[$post_id,$last_id]);
        }
        function post_comments_num($post_id){
            return DB::num_row("SELECT comment_id FROM comments WHERE post_id = ?",[$post_id]);
        }

        #post likes
        function like_post($liker_id,$post_id){
            return DB::execute("INSERT INTO post_likes(liker_id,post_id) VALUES(?,?)", [$liker_id,$post_id]);
        }
        function unlike_post($liker_id,$post_id){
            return DB::execute("DELETE FROM post_likes WHERE liker_id = ? AND post_id = ? ", [$liker_id,$post_id]);
        }
        function post_likes_num($post_id){
            return DB::num_row("SELECT post_like_id FROM post_likes WHERE post_id = ?",[$post_id]);
        }
        function check_user_like_post($post_id,$liker_id){
            return DB::num_row("SELECT post_like_id FROM post_likes WHERE post_id = ? and liker_id = ?",[$post_id,$liker_id]);
        }

        #post rating
        function update_post_rating($post_id,$post_rating){
            return DB::execute("UPDATE posts SET post_rating =? WHERE post_id = ? ", [$post_rating,$post_id]);
        }
    }
?>