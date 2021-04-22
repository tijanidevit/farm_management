<?php 
	include_once '../class/session.class.php';
	include_once '../class/sub_category.class.php';
	$sub_category = new sub_category();
	$session = new Session();
	$sub_category_id = $_GET['sub'];
	$main_category_id = $_GET['main'];
	$user_id = $session->get_session_value('user_id');

	if ($sub_category->user_sub_likes_num($user_id,$sub_category_id) < 1){
		$sub_category->like_sub_category($user_id,$sub_category_id);
	}
	else{
		$sub_category->unlike_sub_category($user_id,$sub_category_id);
	}


		header("location:../sub_category.php?c=".$main_category_id);
?>