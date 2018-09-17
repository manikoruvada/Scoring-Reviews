<!doctype html>
<html>
	<head>
		<style>
 body {	 
	 background-image:url("34.jpg");
 }
 </style>
	</head>
	<body >
		<center>
		<fieldset style="margin-left:400px;margin-right:400px">
		<legend><h1>Forgot password</h1></legend>
		<form action="vill_forgot.php" method="post">
			<table align="center">
				<tr>
					<td><h3>Username:</h3></td>
					<td><input type="text" placeholder="enter username" name="uname"></td>
				</tr>
				<tr>
					<td><h3>Newpassword:</h3></td>
					<td><input type="password" placeholder="enter new password" name="pwd"></td>
				</tr>
				<tr>
					<td><h3>Confirm Password:</h3></td>
					<td><input type="password" placeholder="enter new password" name="cpwd"></td>
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
				       <td><input type="text" placeholder="enter answer" name="ans"></td>
			    </tr>
			    <tr>
					<td ><center><input type="submit" value="Submit" style ="" color="#FFFFFF"></center></td>
					
					<td><center><input type="reset" value="Reset" style =""></center></td>
			    </tr>
			</table>
			</form>
		</fieldset>
		</center>
	</body>
</html>
<?php
session_start();
$con=mysql_connect("localhost","root","","project");
require("dbconfig.php");
@$uname= htmlspecialchars(mysql_real_escape_string($_POST['uname']));
@$pwd= htmlspecialchars(mysql_real_escape_string($_POST['pwd']));
@$cpwd = htmlspecialchars(mysql_real_escape_string($_POST['cpwd']));
@$seq = htmlspecialchars(mysql_real_escape_string($_POST['seq']));
@$ans = htmlspecialchars(mysql_real_escape_string($_POST['ans']));


@$count = mysql_fetch_array(mysql_query("select count(*) as cou from villageregister where uname='".$uname."'"))or die(mysql_error());
if($count['cou']>=1){
	
	$sql="select uname,pwd,seq,ans from villageregister where uname='".$uname."'" ;	
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)){
			if($row["seq"]=="$seq" &&$row["ans"]=="$ans" && "$pwd"=="$cpwd" )
				{
					$sql2 = "UPDATE villageregister SET pwd='".$cpwd."' WHERE uname='".$uname."'";
					if (mysql_query($sql2,$con))
					 {
					echo "Password updated successfully";
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

