<?php
	session_start();
	if(isset($_SESSION['uma'])){
		header("Location:index.php");
	}else{
?>
<html>
   <head>
	     <link rel="stylesheet"  type="text/css" href="Registration.css" >
	     <script src="validate.js"></script>
	</head>
	<body>
		 <center>
			 <fieldset>
				  <legend>LOGIN FORM</legend>
				  <form method="post" action="login.php" onsubmit="return loginValidate()">
					  <table cellpadding="10">
						   <tr>
							   <td>User name</td>
							  <td><input type="text" name="uname" id="uname" /></td>
							  <td><span id="uerror"></span></td>
						   </tr>
						   <tr>
							   <td>Password :</td><td><input type="password" name="password" id="password" /></td>
							   <td><span id="perror"></span></td>
						   </tr>
						   <tr>
							   <td colspan="2"><button type="submit" name="login" value="Signin" >Submit</button></td>
						   </tr>
						   <tr>
							   <td colspan="2"><a href="forgot.html"><i style="font-size:20px;font-weight:bolder;">forgot password..??</i></a></td>
						   </tr>
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
			/*echo "<script>window.location='index.php';</script>";*/
		}
	}
?>


				
