<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
include_once 'class/session.class.php'; 
$session = new Session(); 
if (!isset($_GET['c'])) {
	echo "<script>location.href='sub_categories.php';</script>";
}

$ref = 'category.php?'.$_GET['c'];
$session->check_status($ref);

include_once 'class/sub_category.class.php'; 
$sub_category = new sub_Category();

$sub_category_id = $_GET['c'];
$sub_category_row = $sub_category->fetch_sub_category($sub_category_id);
if (empty($sub_category_row)) {
	header('location:404/');
}

$sub_category_name = $sub_category_row['sub_category'];
$title_obj = new Title(''.$sub_category_name);

include_once 'class/constant.class.php'; 
?>

<body>
	<?php include_once 'fractions/header.php' ?>
<?php if (empty($sub_category->fetch_sub_category_single_post($sub_category_id))): ?>
	<h5 class="text-center" style="margin:10.9em 0; ">Posts not yet added to this sub_category yet!</h5>
<?php else: ?>

	<header class="uk-header-beackground">
		<div class="uk-flex uk-flex-middle" data-uk-height-viewport="offset-top: true">
			<div class="uk-width-1-1">
				<div class="uk-section">
					<div class="uk-container container-fluid">
						<div data-uk-grid>
							<div class="uk-width-expand@m uk-flex uk-flex-middle" 
							data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">
							<div>
								<h1 class="uk-heading-medium uk-margin-remove-top uk-dark"><?php echo $sub_category_name ?></h1>
								<?php 
								$single_row = $sub_category->fetch_sub_category_single_post($sub_category_id);
								?>
								<h2 class=" uk-margin-remove-top uk-light">
									<a class="text-dark" href="article.php?p=<?php echo $single_row['post_id'] ?>"><?php echo $single_row['topic'] ?></a></h2>
									<p class="uk-text-content uk-width-4-5@m">
										<?php echo substr($single_row['content'], 0,450)  ?> ......
									</p>
									<div class="uk-margin-top">
										<p class="uk-article-meta uk-text-xsmall"><?php echo date('F j, Y, g:i a',(int)$single_row['post_time']) ?> — By <a href="profile.php?u=<?php echo $single_row['username'] ?>"><?php echo $single_row['firstname'].' '. $single_row['othernames']?></a></p>
									</div>
								</div>
							</div>
							<div class="uk-width-1-2@m uk-flex uk-flex-middle" 
							data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300">
							<div>
								<div class="uk-inline">
									<div  class="post-medi">
										<img class="img-responsive" src="post_media/<?php echo $single_row['media'] ?>" alt="<?php echo $single_row['topic'] ?>">
									</div>
									<a class="uk-position-cover" href="article.php?p=<?php echo $single_row['post_id'] ?>" title="<?php echo $single_row['topic'] ?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="uk-section uk-section-default">
	<div class="uk-container">
		<h2 class="uk-section-title"><?php echo $sub_category_name ?> <span id="followArea"></span></h2>
		<hr class="uk-margin-medium-bottom">
		<div id="postArea"></div>
		
		<div id="spinner" class="my-2" class="uk-margin-medium-top uk-text-center uk-text-primary"><span data-uk-spinner="ratio: 1.4"></span></div>
		<p id='noMore' class="text-danger"></p>
		<div class="form-group">
			<button class="btn btn-dark" id="load_more_post">Load more posts</button>
		</div>
	</div>
</div>
<?php endif ?>
<?php include_once 'fractions/footer.php'; ?>

</body>

</html>


<script type="text/javascript">
	$(document).ready(function() {
		var c_id = ''+<?php echo $sub_category_id ?>;
		fetch_posts();
		$('#spinner').hide();


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


		function fetch_posts() {

			$.ajax({
				url:'actions/fetch_category_posts.php',
				type: 'POST',
				data:{sub_category_id:c_id},
				success: function(data){
					if (data != '' && data != 0) {
						$('#postArea').html(data);
					}
					else if(data == 0){
						$('#postArea').html('<p>No posts added to this category yet</p>');
					}
						$('#noMore').text('');
				}
			})
		}

		$('#load_more_post').click(function() {
			var lastId = $('.comment-items:last').attr("id");
			$.ajax({
				url:'actions/fetch_more_category_posts.php',
				type: 'POST',
				data:{sub_category_id:c_id,last_id:lastId},
				beforeSend: function(){
					$('#spinner').show();
				},
				success: function(data){
					if (data != '' && data != 0) {
						$('#postArea').append(data);
						$('#noMore').text('');
					}
					else if(data == 0){
						if ($('#noMore').text !='') {
							$('#noMore').text('No more posts to load......');
						}
					}
					$('#spinner').hide();
				}
			})
		})

		function checkUserLikePost(){
			$.ajax({
				url:'actions/fetch_follow_button.php',
				type: 'POST',
				data:{sub_category_id:c_id},
				beforeSend: function(){
				},
				success: function(data){
					if (data != '' && data != 0) {
						$('#postArea').html(data);
					}
					$('#spinner').hide();
				}
			})
		}

		$('#followArea').click(function(){
			$.ajax({
				url:'actions/follow_post.php',
				type: 'POST',
				data:{sub_category_id:c_id},
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