<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
include_once 'class/session.class.php'; 
$session = new Session(); 
if (!isset($_GET['c'])) {
	echo "<script>location.href='categories.php';</script>";
}

$ref = 'category.php?'.$_GET['c'];
$session->check_status($ref);

include_once 'class/main_category.class.php'; 
$main_category = new Main_category();
include_once 'class/sub_category.class.php'; 
$sub_category = new Sub_category();

$main_category_id = $_GET['c'];
$main_category_row = $main_category->fetch_main_categories($main_category_id);
if (empty($main_category_row)) {
	header('location: 404/');
}

$title_obj = new Title('Category');
include_once 'class/constant.class.php';

$sub_category_row = $sub_category->fetch_sub_categories($main_category_id);
?>

<body>
	<?php include_once 'fractions/header.php' ?>
	<div class="container-fluid py-3 uk-section-muted">
		<div class="text-center">
			<h2>Sub Categories</h2>
			<p class="lead">Read What Matters To You</p>
		</div>

		<div class="">
			<div class="row">

				<?php foreach ($sub_category_row as $row): ?>
					<div class="col-md-2 col-6 my-1">
						<div class="category-box">
							<div class="text-center">
								<a class="" href="category.php?c=<?php echo $row['sub_category_id'] ?>">
									<div class="card py-3">
										<div>
											<img class="category-icon" src="images/<?php echo $row['sub_category_icon'] ?>">
										</div>
										<p class="uk-article-meta uk-text-xsmall"><?php echo $row['sub_category'] ?></p>
									</div>
								</a>
								<?php if ($session->check_session('user')): ?>
									<div class="category-hint">
										<p class=" text-light uk-text-xsmall font-weight-bold"><?php echo $sub_category->sub_category_posts_num($row['sub_category_id']) ?> posts
										</p class="uk-article-meta uk-text-xsmall">&nbsp; 
											<?php if ($sub_category->user_sub_likes_num($_SESSION['user_id'],$row['sub_category_id']) < 1): ?>
											 
											<a href="actions/follow_cat.php?sub=<?php echo $row['sub_category_id'] ?>&main=<?php echo $main_category_id ?>" class="btn btn-sm btn-info" title="Follow <?php echo $row['sub_category'] ?>">Follow</a>
											 <?php else: ?>  
											<a href="actions/follow_cat.php?sub=<?php echo $row['sub_category_id'] ?>&main=<?php echo $main_category_id ?>" class="btn btn-sm btn-dark" title="Unfollow <?php echo $row['sub_category'] ?>">Unfollow</a>
										<?php endif ?>
										
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php include_once 'fractions/footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
		})

		// function followBtn(c_id) {
			// $.ajax({
			// 	url: 'actions/follow_cat.php',
			// 	type: 'POST',
			// 	data: {main_category_id:c_id}
			// 	success:function(data){
			// 		$('#categoryArea').html(data);
			// 		console.log(data);
			// 	}
			// })
		// }
	</script>

</body>

</html>
