<?php 
session_start();
include_once '../class/posts.class.php';
include_once '../class/follow.class.php';
$post = new Posts();

$post_type = $_POST['post_type'];
if ($post_type != 'followPosts') {
	if ($post_type == 'latestPosts') {
		$post_data = $post->fetch_recent_posts();
	}
	if ($post_type == 'topPosts') {
		$post_data = $post->fetch_top_posts();
	}
	foreach ($post_data as $post_row){
		echo '
				<div class="post_items"  id="'. $post_row["post_id"].'">
					<div class="uk-inline">
						<img src="post_media/'. $post_row["media"].'" alt="'. $post_row["firstname"].' '. $post_row["othernames"].'">
						<a class="uk-position-cover" href="article.php?p='.$post_row["post_id"].'" title="'. $post_row["topic"].'"></a>
					</div>
					<h4 class="uk-margin-top"><a href="article.php?p='.$post_row["post_id"].'">'. $post_row["topic"].'</a></h4>
					<div class="uk-article-meta uk-text-xsmall uk-margin-small">'.date("F j, Y, g:i a",(int)$post_row["post_time"]).' — <a href="profile.php?u='. $post_row["username"].'">'. $post_row["firstname"].' '. $post_row["othernames"].'</a></div>
					<p class="uk-margin-top">'. substr($post_row["content"], 0,140).'....</p>
				</div>
				
			';
	}
}
if ($post_type == 'followPosts') {
	$follow = new Follows();
	$follow_data = $follow->fetch_user_following($_SESSION['user_id']);

	if (!empty($follow_data)) {
		foreach ($follow_data as $follow_row) {
			$post_data = $post->fetch_follow_posts($follow_data['following_id']);

			$sn = 1;
			foreach ($post_data as $post_row){
				while ($sn < 42) {
					echo '
							<div  id="'. $post_row["post_id"].'">
								<div class="uk-inline">
									<img src="post_media/'. $post_row["media"].'" alt="'. $post_row["firstname"].' '. $post_row["othernames"].'">
									<a class="uk-position-cover" href="article.php?p='.$post_row["post_id"].'" title="'. $post_row["topic"].'"></a>
								</div>
								<h4 class="uk-margin-top"><a href="article.php?p='.$post_row["post_id"].'">'. $post_row["topic"].'</a></h4>
								<div class="uk-article-meta uk-text-xsmall uk-margin-small">'.date("F j, Y, g:i a",(int)$post_row["post_time"]).' — <a href="profile.php?u='. $post_row["username"].'">'. $post_row["firstname"].' '. $post_row["othernames"].'</a></div>
								<p class="uk-margin-top">'. substr($post_row["content"], 0,140).'....</p>
							</div>
							
						';
				}
				$sn++;
			}
		}
	}
}
	
?>