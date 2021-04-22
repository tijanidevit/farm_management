<?php 

include_once '../class/posts.class.php';
$post = new Posts();

$post_id = $_POST['post_id'];
if ($post->post_comments_num($post_id) > 0) {
	foreach ($post->fetch_post_comments($post_id) as $comment_row){
		echo '
		  <li class="media comment-items" id="'. $comment_row["comment_id"].'">
		  	<div class="row">
		  		<div class="col-md-1 col-12">
		  			<img class="mr-0 comment-img rounded-circle img-fluid off-mobile" src="user_images/'. $comment_row["profile_image"].'" alt="'. $comment_row["firstname"].' '. $comment_row["othernames"].'">
		  		</div>
		  		<div class="col-md-9 col-12">
			      <p class="comment-text">'. $comment_row["comment"].'</p>
			      <h5 class="mt-0 mb-1"><a href="profile.php?u='. $comment_row["username"].'">'. $comment_row["firstname"].' '. $comment_row["othernames"].'</a></h5>
				      <hr />

		  		</div>
		  	</div>
		    
		    <div class="media-body">
		    </div>
		  </li>';
	}
}
else{
	echo 0;
}
?>