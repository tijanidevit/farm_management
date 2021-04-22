<?php 
	include_once 'connect.php';
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password =md5($_POST['password']);

		$query = $conn->prepare("SELECT user_id FROM users WHERE email = ? AND password = ? ");
		$query->execute([$email,$password]);
		$res = $query->rowCount();

		if ($res > 0) {
			$_SESSION['anti_user'] = true;
			echo "<script>location.href = 'home.php'</script>";
		}
		else{
			$err = 'Invalid Credentials';
		}
	}
?>