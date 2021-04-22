<?php 
	include_once 'conn.php';
	if (isset($_POST['user_id'])) {
		$user_id = flushData($_POST['user_id']);
		$amount = flushData($_POST['amount']);
		$wallet = flushData($_POST['wallet']);

		$user_balance_check = $conn->query("SELECT * from user_accounts where user_id = '$user_id' ");
		$row = $user_balance_check->fetch_assoc();

		$user_balance = $row['balance'];

		if ($user_balance >= $amount) {
			$query = $conn->query("INSERT into user_withdrawals() VALUES(null,'$user_id','$amount','$wallet',null,0) ");
			if ($query) {
				$new_user_balance = $row['balance'] - $amount;
				$conn->query("UPDATE user_accounts set balance = '$new_user_balance' where user_id = '$user_id' ");
				echo 1 ;
			}
			else{
				echo '<div class="alert alert-danger">'.$conn->error.'</div>';
			}
		}
		else{
			echo '<div class="alert alert-warning">Amount requested to withdraw is more than your current balance</div>';
		}
	}

	function flushData($data)
	{
		return trim(htmlentities($data));
	}
?>