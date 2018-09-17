<?php
	
	
	if(isset($_POST['login'])){
		$user=htmlentities(mysql_real_escape_string($_POST['user']));
		$passwd=htmlentities(mysql_real_escape_string($_POST['password']));
		include "dbconfig.php";
		$sql=mysql_query("SELECT * FROM userregister WHERE username='$user' AND password='$passwd'");
		$row=mysql_fetch_array($sql);
		if(empty($row)){
			echo "<script>alert('Invalid Details');</script>";
		}else{
			echo "<script>alert('Success');</script>";
			/*$_SESSION['uma']=$user;
			echo "<script>window.location='index.php';</script>";*/
		}
	}
?>

