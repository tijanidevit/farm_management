<?php 
	include_once 'action/session.php';
	include_once 'action/register.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="shortcut icon" type="image/png" href="https://placehold.co/20x20" >
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="bg-info">
		<h3 class="text-center text-white p-3">Malware Detector</h3>
	</header>
<br><br>
	<div class="box">
 		<div>
 			<form method="post" class="card p-4 px-5" style="width: 60vw;">
 				<h3 class="text-center">Register Here</h3>
 				<div class="form-group text-center">
 					<img src="images/c.png" class="img">
 				</div>
 				<?php if (isset($err)): ?>
 					<div class="alert alert-danger"><?php echo $err; ?></div>
 				<?php endif ?>
 				
 				<div class="form-group">
 					<label>Fullname</label>
 					<input type="text" name="fullname" class="form-control" required placeholder="Tijani Omobolanle Ayuba">
 				</div>
 				
 				<div class="form-group">
 					<label>Email Address</label>
 					<input type="email" name="email" class="form-control" required placeholder="tijani@me.com">
 				</div>
 				<div class="form-group">
 					<label>Password</label>
 					<input type="password" class="form-control" required placeholder="*******" name="password">
 				</div>
 				<div class="form-group">
 					<input type="submit" class="form-control btn btn-info" value="Register" name="submit">
 				</div>
 				<div>Login<a href="./"> Here</a></div>
 			</form>
 		</div>
	</div>
	<br><br>
	<footer class="bg-info p-3">
		<p class="text-center text-white">Malware Detector &copy; <?php echo date('Y') ?></p>	
	</footer>
</body>
</html>
<script src="js/uikit.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
