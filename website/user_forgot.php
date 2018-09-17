<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Registration.css">
		<script src="validate.js"></script>
 
 </style>
	</head>
	<body >
		<center>
		<fieldset style="margin-left:400px;margin-right:400px">
		<legend><h3>Forgot password</h3></legend>
		<form action="user_forgot.php" method="post" onsubmit="return loginValidate()">
			<table align="center">
				<tr>
					<td><h3>Username:</h3></td>
					<td><input type="text" placeholder="enter username" name="uname"></td>
				</tr>
				<tr>
					<td><h3>Newpassword:</h3></td>
					<td><input type="password" placeholder="enter new password" name="password"></td>
				</tr>
				<tr>
					<td><h3>Security question:</h3></td>
					<td><select name="seq">
                       <option>select</option>
				       <option>what is your favourite color?</option>
				       <option>what is your favourite food?</option>
				       <option>what is our national animal?</option>
				 </select></td>
				</tr>
			    <tr>
				       <td><h3>Answer</h3></td>
				       <td><input type="text" placeholder="enter answer" name="secans"></td>
			    </tr>
			    <tr>
					<td ><center><input type="submit" value="Submit" ></center></td>
					
					<td><center><input type="reset" value="Reset" ></center></td>
			    </tr>
			</table>
			</form>
		</fieldset>
		</center>
	</body>
</html>
<?php
session_start();
$con=mysql_connect("localhost","root","","medical");
require("dbconfig.php");
@$uname= htmlspecialchars(mysql_real_escape_string($_POST['uname']));
@$pwd= htmlspecialchars(mysql_real_escape_string($_POST['password']));
@$cpwd = htmlspecialchars(mysql_real_escape_string($_POST['cpwd']));
@$seq = htmlspecialchars(mysql_real_escape_string($_POST['seq']));
@$ans = htmlspecialchars(mysql_real_escape_string($_POST['secans']));


@$count = mysql_fetch_array(mysql_query("select count(*) as cou from userregister where username='".$uname."'"))or die(mysql_error());
if($count['cou']>=1){
	
	$sql="select username,password,security_question,security_answer from userregister where username='".$uname."'" ;	
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)){
			if($row["security_question"]=="$seq" &&$row["security_answer"]=="$ans"  )
				{
					$sql2 = "UPDATE userregister SET password='".$pwd."' WHERE username='".$uname."'";
					if (mysql_query($sql2,$con))
					 {
					echo "<scrit>alert('Password updated successfully')</scrit>";
					echo "<script>window.location='userlogin.php';</script>";
					}
					else 
					{
						echo " updating Password failed " . mysql_error($con);
					}
	}	
	else echo "User details not found";	
	}
	
}
?>
