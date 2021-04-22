<?php 
	include_once 'conn.php';
	if (isset($_POST['user_id'])) {
		$user_id = flushData($_POST['user_id']);
		$amount = flushData($_POST['amount']);

		if ($amount >= 10) {
			$query = $conn->query("INSERT into user_savings() VALUES(null,'$user_id','$amount',0,null,0) ");
			if ($query) {
				echo 1 ;
			}
			else{
				echo '<div class="alert alert-danger">'.$conn->error.'</div>';
			}
		}
		else{
			echo '<div class="alert alert-warning">You cannot deposit less than $10</div>';
		}
	}

	function flushData($data)
	{
		return trim(htmlentities($data));
	}
?>