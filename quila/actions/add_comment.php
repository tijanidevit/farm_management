<?php 
	echo addComment();
	function addComment()
	{
		if (isset($_POST['post_id'])) {
			include_once '../class/posts.class.php';
			include_once '../class/users.class.php';
			$post = new Posts();
			$user = new Users();
			$commenter_id = $_POST['commenter_id'];
			$post_id = $_POST['post_id'];
			$poster_id = $_POST['poster_id'];
			$post_rating = ((int)$_POST['post_rating']) + 2;

			$poster_rating = (int)($user->fetch_user_rating($poster_id)['user_rating']) + 1;
			$commenter_rating = (int)($user->fetch_user_rating($commenter_id)['user_rating']) + 1;
			$comment = $_POST['comment'];

			if ($post->comment_on_post($post_id,$commenter_id,$comment)) {
				if($post->update_post_rating($post_id,$post_rating)){
					if ($user->update_user_rating($poster_rating,$poster_id) && $user->update_user_rating($commenter_rating,$commenter_id)) {
						return 1;
					}
				}
			}
			else{
				return 0;
			}
		}
		else{
			echo "string";
		}
	}
?>