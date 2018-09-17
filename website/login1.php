
<html>
   <head>
	     <link rel="stylesheet"  type="text/css" href="Registration.css" >
	</head>
	<body>
		 <center>
			 <fieldset>
				  <legend>LOGIN FORM</legend>
				  <form method="post" action="health+">
					  <table cellpadding="10">
						   <tr>
							   <td>User name</td>
							   <td><input type="text" name="user" id="user" /></td>
						   </tr>
						   <tr>
							   <td>Password :</td><td><input type="password" name="passwd" id="passwd" /></td>
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


				
