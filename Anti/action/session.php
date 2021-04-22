<?php 
	session_start();
	function check_session(){
		if (!isset($_SESSION['anti_user'])) {
			echo "<script>location.href = './'</script>";
		}
	}
?>