<?php 
	include_once '../class/session.class.php';
	include_once '../class/posts.class.php';
	$post = new Posts();
	$session = new Session();
	$post_id = $_POST['post_id'];

	if (! $post->check_user_like_post($post_id,$session->get_session_value('user_id'))){
		echo '<button id="likeBtn" title="click to like" class="btn btn-lg"><i class=" fa fa-heart"></i></button><small style="font-size: 15px" class=" mr-4">'.$post->post_likes_num($post_id).' Likes</small> ';
	}
	else{
		echo '<button id="unlikeBtn" title="click to unlike" class="btn btn-lg"><i class=" fa fa-heart text-danger"></i></button><small style="font-size: 15px" class=" mr-4">'.$post->post_likes_num($post_id).' Likes</small>';
	}
?>
				