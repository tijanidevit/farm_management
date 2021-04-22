<?php 
	include_once 'action/session.php';
	check_session();
	include_once 'core/test_file.php';
?>
<?php if (isset($scanId)): ?>
	<script>location.href = 'test_file.php?errors=<?php echo $scanId ?>'</script>
<?php endif ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="shortcut icon" type="image/png" href="https://placehold.co/20x20" >
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="bg-info">
		<h3 class="text-center text-white p-3">Malware Detector</h3>
	</header>
	<div class="container-fluid">
		<button class="btn border-info" onclick="goBack()">Go Back</button>

		<script>
			function goBack() {
			  window.history.back();
			}
		</script>

		<br><br>
		<br>
		<div class="box">
	 		<div>
	 			<form method="post" enctype="multipart/form-data" class="card p-4" style="width: 60vw;">
	 				<h3 class="text-center">Test file</h3>
	 				<div class="form-group text-center">
	 					<img src="images/file.png">
	 				</div>
	 				<?php if (isset($err)): ?>
	 					<div class="alert alert-danger"><?php echo $err; ?></div>
	 				<?php endif ?>
	 				
	 				<div class="form-group">
	 					<label>Upload File</label>
	 					<input type="file" name="file" class="form-control" required>
	 				</div>
	 				<div class="form-group">
	 					<input type="submit" class="form-control btn btn-info" value="Test file" name="submit">
	 				</div>

	 				<?php if(isset($_GET['errors']) && $_GET['errors'] < 0): ?>
	 					<div class="alert alert-success">
	 						The file you tested is free of virus
	 					</div>
	 				<?php endif ?>
	 				<?php if(isset($_GET['errors']) && $_GET['errors'] = 0): ?>
	 					<div class="alert alert-danger">
	 						The file you tested is infected of virus
	 					</div>
	 				<?php endif ?>
	 				<?php if(isset($_GET['errors']) && $_GET['errors'] > 0): ?>
	 					<div class="alert alert-warning">
	 						The The file you tested cannot be read or you have a bad network connection
	 					</div>
	 				<?php endif ?>
	 			</form>
	 		</div>
		</div>
		<br>
	</div>
	<?php include_once 'footer.php'; ?>
</body>
</html>
<script src="js/uikit.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
