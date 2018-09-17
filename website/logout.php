<?php
	session_start();
	if(isset($_SESSION['uma'])){
		unset($_SESSION['uma']);
		header('location:userlogin.php');
	}
?>
