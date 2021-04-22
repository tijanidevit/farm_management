<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
include_once 'class/session.class.php'; 
$session = new Session(); 
if (!isset($_GET['p'])) {
	echo "<script>location.href='main_categories.php';</script>";
}

$ref = 'article.php?'.$_GET['p'];
$session->check_status($ref);

include_once 'class/posts.class.php'; 
$post = new Posts();

$post_id = $_GET['p'];
$post_row = $post->fetch_post($post_id);
if (empty($post_row)) {
	die();
}

$post_name = $post_row['topic'];
$sub_category_id = $post_row['sub_category_id'];
$title_obj = new Title(''.$post_name);
$poster_id = $post_row['user_id'];

include_once 'class/constant.class.php';
?>
<body>
	<style type="text/css">
		
		@media (max-width: 768px) {
			.off-mobile{
				display: none;
			}
		}

	</style>
	<?php include_once 'fractions/header.php' ?>

	<div class="uk-flex uk-flex-middle">
		<div class="uk-width-1-1">
			<div class="uk-section">
				<div class="uk-container">
					<div data-uk-grid>
						<div class="uk-width-1-3@m uk-flex uk-flex-middle" 
						data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">
						<div>
							<p class="uk-text-lead uk-margin-small-bottom"><?php echo $post_row['sub_category']; ?></p>
							<h1 class="uk-heading-small uk-margin-remove-top"><?php echo $post_row['topic']; ?></h1>
							<div class="uk-margin-top">
								<p class="uk-article-meta uk-text-xsmall"><?php echo date('F j, Y, g:i a',(int)$post_row['post_time']) ?> — By <a href="profile.php?u=<?php echo $post_row['username'] ?>"><?php echo $post_row['firstname'].' '. $post_row['othernames']?></a></p>
							</div>
						</div>
					</div>
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ea61e1da271b1fc"></script>

					<div class="uk-width-expand@m uk-flex uk-flex-middle" 
					data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300">
					<div>
						<img src="post_media/<?php echo $post_row['media'] ?>" class='post-media' alt="Image alt text">
					</div>
				</div>

            
			</div>
			
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
		</div>
	</div>
</div>
</div>

<div class="uk-section uk-padding-remove-top uk-section-default">
	<div class="uk-container">
		<div class="uk-grid-large" data-uk-grid>
			<div class="uk-width-expand@m uk-text-content">
				<div class="uk-dropcap text-justif content"><?php echo $post_row['content'] ?></div>
				<div class="uk-width-1-6 uk-visible@l"></div>
				<?php if ($session->check_session('user')): ?>
					
					<span id="likeArea">

					</span>
					<button title="click to comment" class="btn btn-lg"><i class=" fa fa-comment"></i></button><small style='font-size: 15px' class="mr-4"><span id="commentsCount"><?php echo $post->post_comments_num($post_id) ?></span> Comments</small> 

					
				<?php endif ?>
			</div>		
		</div>
	</div>
</div>


<!-- <div class="uk-section uk-padding-remove-top uk-section-default">
	<div class="uk-container">
		<div class="uk-grid-large" data-uk-grid>
			<div class="uk-width-1-6 uk-visible@l"></div>
			<div class="uk-width-expand@s uk-text-content">
				<img src="https://placehold.co/920x400" alt="Image alt">
			</div>
		</div>		
	</div>
</div>-->
<?php if ($session->check_session('user')): ?>

	<div class="jumbotron p-5">
		<div class="container">
			<h5 class="text">Opinions on "<?php echo $post_row['topic']; ?>"</h5>
			<form method="post" id='commentForm'>
				<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
				<input type="hidden" name="poster_id" value="<?php echo $poster_id ?>">
				<input type="hidden" name="post_rating" id="postRating" value="<?php echo $post_row['post_rating'] ?>">
				<input type="hidden" name="commenter_id" value="<?php echo $session->get_session_value('user_id'); ?>">
				<div class="form-group">
					<label>Share your opinion</label>
					<textarea rows='4' required name="comment" id='textarea' class="form-control uk-input"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-dark" name='submit'>Submit Comment</button>
				</div>
			</form>
			<h5 class="text">Others opinions</h5>
			<ul class="list-unstyled" id='commentArea'>
			</ul>

			<div id="spinner" class="my-2" class="uk-margin-medium-top uk-text-center uk-text-primary">
				<span data-uk-spinner="ratio: 1.4"></span>
			</div>
			<p id='noMore' class="text-danger"></p>
			<div class="form-group">
				<button class="btn btn-dark" id="load_more_comment">Load more comments</button>
			</div>
		</div>
	</div>
	<?php else: ?>
		<h3 class="uk-section uk-container uk-margin-remove-top"><a class="uk-text-primary" href="sign-in.php">Please Login Here</a> or <a class="uk-text-primary" href="sign-up.php">Please Register Here</a> to like or comment on this post</h3>
	<?php endif ?>


	<div class="uk-section uk-section-mutd" style="margin-top: -60px;">
		<div class="uk-container">
			<h3 class="uk-section-title">Related Articles</h3>
			<div class="row">
				<?php foreach ($post->fetch_related_post($sub_category_id,$post_id) as $related_row): ?>	
					<div class='col-6 col-md-3'>
						<div class="uk-inline">
							<img src="post_media/<?php echo $related_row['media'] ?>" class="related-post-img" alt="<?php echo $related_row['topic'] ?>">
							<a class="uk-position-cover" href="article.php?p=<?php echo $related_row['post_id'] ?>" title="<?php echo $related_row['topic'] ?>"></a>
						</div>
						<h3 class="uk-margin-top"><a href="article.php?p=<?php echo $related_row['post_id'] ?>"><?php echo $related_row['topic'] ?></a></h3>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small"><?php echo date('F j, Y, g:i a',(int)$post_row['post_time']) ?> — By <a href="profile.php?u=<?php echo $post_row['username'] ?>"><?php echo $post_row['firstname'].' '. $post_row['othernames']?></a></div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<?php include_once 'fractions/footer.php'; ?>


	<script type="text/javascript">
		$(document).ready(function() {
			var p_id = ''+<?php echo $post_id ?>;
			checkUserLikePost();
			$('#spinner').hide();
			fetch_comment();
			$('#commentForm').submit(function(e){
				e.preventDefault();

				$.ajax({
					url:'actions/add_comment.php',
					type: 'POST',
					data:$('#commentForm').serialize(),
					success: function(data){
						if (data == 1) {
							fetch_comment();
							commentCount = parseInt($('#commentsCount').text());
							$('#commentsCount').text(commentCount + 1);
							let postRating = parseInt($('#postRating').val());
							$('#postRating').val(''+(postRating+2));
						}
						else{
							console.log(data);
						}
					}
				})
			})


			function fetch_comment() {
				var p_id = ''+<?php echo $post_id ?>;

				$.ajax({
					url:'actions/fetch_comment.php',
					type: 'POST',
					data:{post_id:p_id},
					success: function(data){
						if (data != '' && data != 0) {
							$('#commentArea').html(data);
							$('#textarea').val('');
						}
						else if(data == 0){
							$('#commentArea').append('<li>Be the first to share an opinion</li>');
						}
						$('#noMore').text('');

					}
				})
			}

			$('#load_more_comment').click(function() {
				var lastId = $('.comment-items:last').attr("id");
				$.ajax({
					url:'actions/fetch_more_comments.php',
					type: 'POST',
					data:{post_id:p_id,last_id:lastId},
					beforeSend: function(){
						$('#spinner').show();
					},
					success: function(data){
						if (data != '' && data != 0) {
							$('#commentArea').append(data);
							$('#noMore').text('');
						}
						else if(data == 0){
							if ($('#noMore').text !='') {
								$('#noMore').text('No more comments to load......');
							}
						}
						$('#spinner').hide();
					}
				})
			})

			function checkUserLikePost(){
				$.ajax({
					url:'actions/fetch_like_button.php',
					type: 'POST',
					data:{post_id:p_id},
					success: function(data){
						if (data != '' && data != 0) {
							$('#likeArea').html(data);
						}
						$('#spinner').hide();
					}
				})
			}

			$('#likeArea').click(function(){
				$('#spinner').hide();
				$.ajax({
					url:'actions/like_post.php',
					type: 'POST',
					data:{post_id:p_id},
					success: function(data){
						if (data == 1) {
							checkUserLikePost();
						}
						else{
						}
					}
				})
			})
		})
	</script>
</body>

</html>