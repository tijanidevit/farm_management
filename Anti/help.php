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
	 			<h4>Guidelines to use this software:</h4>
	 			<p>To use this software, make sure you are connected to the internet</p>
	 			<h5>To test links for malicious activities:</h5>
	 			<ul>
	 				<li>Goto the <a href="test_link.php">Test Link Page</a></li>
	 				<li>Enter the link to test and click on submit</li>
	 			</ul>
	 			<h5>To test files for malicious activities:</h5>
	 			<ul>
	 				<li>Goto the <a href="test_file.php">Test File Page</a></li>
	 				<li>Upload the File to test and click on submit</li>
	 			</ul>
	 			<h5>To log malicious activities to the police ICT department:</h5>
	 			<ul>
	 				<li>Click on <a href="tel:08038517414">Call</a> to call the police ICT department</li>
	 			</ul>
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
