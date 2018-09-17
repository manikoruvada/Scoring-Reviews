
<?php
	
	 $user=htmlentities(mysql_real_escape_string($_POST['user']));
	 $password=htmlentities(mysql_real_escape_string($_POST['passwd']));  
	
		include "dbconfig.php";
		$sql=mysql_query("SELECT * FROM userregister WHERE username='$user' AND password='$password'");
		$row=mysql_fetch_array($sql);
		if(empty($row)){
			echo "<script>alert('Invalid Details');</script>";
		}else{
			echo "<script>alert('Success');</script>";
			$_SESSION['uma']=$user;
			echo "<script>window.location.href='health+.html' ;</script>";
		}	
?>

