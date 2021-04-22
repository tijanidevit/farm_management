<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
include_once 'class/session.class.php'; 
$session = new Session(); 

if ($session->check_session('status')) {
	echo "<script>location.href = 'activation.php?ref=categories.php'</script>";
}

$title_obj = new Title('Category');
include_once 'class/constant.class.php';
?>
<body>
	<?php include_once 'fractions/header.php' ?>
	<div class="container-fluid py-3 uk-section-muted">
		<div class="text-center">
			<h2>Categories</h2>
			<p class="lead">Read articles by categories</p>
		</div>

		<div class="">
			<div class="row" id="categoryArea">
			</div>
		</div>
	</div>
	<?php include_once 'fractions/footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			loadMainCategory();
		})

		function loadMainCategory() {
			$.ajax({
				url: 'actions/fetch_main_category.php',
				type: 'POST',
				success:function(data){
					$('#categoryArea').html(data);
				}
			})
		}
	</script>

</body>

</html>
