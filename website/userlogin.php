<?php
	session_start();
	if(isset($_SESSION['uma'])){
		header("Location:healthplus.html");
	}else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet"  type="text/css" href="Registration.css" >
        <script src="validate.js"></script>
	</head>
	<body onload="">
		<center>
			<fieldset>
				<legend><h3>USER LOGIN </h3></legend>
				<br>
				<form method="post" action="userlogin.php" onsubmit="return loginValidate()" >
					<table cellpadding="10">
						<tr>
						<td><img src="assets/a.png" height="30px" width="50px"></td>
						<td>User name :</td><td><input type="text" name="uname" id="uname" /></td><td><span id="uerror"></span></td></tr>
						<tr><td><img src="assets/kk.jpg" height="30px" width="50px"></td>
						<td>Password :</td><td><input type="password" name="password" id="password" /></td><td><span id="perror"></span></td></tr>
						<tr><td colspan="3"><center><button type="submit" name="login" value="Signin" >Submit</button></center></td></tr>
						
						<tr><td colspan="3"><center><a href="userregistration.html">Don't have an account..??</a></center></td></tr>
						<tr><td colspan="3"><center><a href="forgotuser.php">forgot password..??</a></center></td></tr>
					</table>
				</form>
			</fieldset>
		</center>
	</body>
</html>
<?php
	}
	
	if(isset($_POST['login'])){
		$user=htmlentities(mysql_real_escape_string($_POST['uname']));
		$passwd=htmlentities(mysql_real_escape_string($_POST['password']));
		include "dbconfig.php";
		$sql=mysql_query("SELECT * FROM userregister WHERE username='$user' AND password='$passwd'");
		$row=mysql_fetch_array($sql);
		if(empty($row)){
			echo "<script>alert('Invalid Details');</script>";
		}else{
			echo "<script>alert('Success');</script>";
			$_SESSION['uma']=$user;
			echo "<script>window.location='scoring.html';</script>";
		}
	}
?>
