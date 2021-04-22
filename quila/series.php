<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
	include_once 'class/session.class.php'; 
	$session = new Session(); 
	$title_obj = new Title('Category');
	include_once 'class/constant.class.php';

	include_once 'class/category.class.php'; 
	$category = new Category();
?>

<body>
<?php include_once 'fractions/header.php' ?>
<div class="container">
	<h1>All Series</h1>

	<div class="row">
		<?php foreach ($category->fetch_main_categories() as $row): ?>
			<div class="col-md-4 my-1">
				<div class="card p-2">
					<div class="row">
						<div class="col-md-2">
							<img class="category-icon" src="images/<?php echo $row['category_icon'] ?>">
						</div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-9"><h3 class="lead"><?php echo $row['category'] ?></h3></div>
								<div class="col-md-3"><button href="followBtn<?php echo $row['category_id'] ?>" class="btn btn-sm btn-info" title="Follow <?php echo $row['category'] ?>">+</button></div>
							</div>
						
					</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<br>
<?php include_once 'fractions/footer.php'; ?>

</body>

</html>
