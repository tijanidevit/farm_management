<?php 
	include_once '../class/session.class.php';
	include_once '../class/posts.class.php';
	$post = new Posts();
	$session = new Session();
	$post_id = $_POST['post_id'];
	$liker_id = $session->get_session_value('user_id');
	if (! $post->check_user_like_post($post_id,$liker_id)) {
		if ($post->like_post($liker_id,$post_id)){
			echo 1;
		}
		else{
			echo 0;
		}
	}
	else{
		if ($post->unlike_post($liker_id,$post_id)){
			echo 1;
		}
		else{
			echo 0;
		}
	}
?>
				