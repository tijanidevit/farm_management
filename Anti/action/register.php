<?php 
	include_once 'connect.php';
	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password =md5($_POST['password']);

		$query = $conn->prepare("SELECT user_id FROM users WHERE email = ? ");
		$query->execute([$email]);
		$res = $query->rowCount();

		if ($res < 1) {
			$query = $conn->prepare("INSERT INTO users(email,fullname,password) VALUES(?,?,?) ");
			if($query->execute([$email,$fullname,$password])){
				$_SESSION['anti_user'] = true;
				echo "<script>location.href = 'home.php'</script>";
			}
			else{
				$err = 'User not Added';
			}
		}
		else{
			$err = 'User already exist with same email address';
		}
	}
?>