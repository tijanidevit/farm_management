<?php 
	include_once 'action/session.php';
	check_session();
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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="bg-info">
		<h3 class="text-center text-white p-3">Malware Detector</h3>
	</header>
	<div class="space-10"></div>
	<div class="container-fluid">
		<div class="container ">
			<div class="row my-5">
				<div class="col-6 ">
					<a href="test_link.php">
						<div class="card mycard border-info my-2 p-4">
							<div class="text-center">
								<img src="images/link.png" class='img-home'>
								<h5>Test Link</h5>
							</div>
						</div>
					</a>
				</div>

				<div class="col-6">
					<a href="test_file.php">
						<div class="card mycard border-info my-2 p-4">
							<div class="text-center">
								<img src="images/file.png" class='img-home'>
								<h5>Test Files</h5>
							</div>
						</div>
					</a>
				</div>

				<div class="col-6">
					<a href="tel:08038517414">
						<div class="card mycard border-info my-2 p-4">
							<div class="text-center">
								<img class='img-home' src="images/report.png">
								<h5>File Report</h5>
							</div>
						</div>
					</a>
				</div>

				<div class="col-6">
					<a href="#">
						<div class="card mycard border-info my-2 p-4">
							<div class="text-center">
								<img class='img-home' src="images/help.png">
								<h5>Help</h5>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include_once 'footer.php'; ?>
</body>
</html>
<script src="js/uikit.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
