
<?php
    include "dbconfig.php";
	   
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $age=$_POST["year"];
    $Gender=$_POST["gender"];
    $user=htmlentities(mysql_real_escape_string($_POST['uname']));
    $phonenumber=$_POST["phonenumber"];
    $passwd=htmlentities(mysql_real_escape_string($_POST['password']));   
    $security_question=$_POST["seq"];
    $security_answer=$_POST["secans"];
    
    
	$sql=mysql_query("SELECT username FROM userregister");
	$details=mysql_fetch_array($sql);
    if($user==$details['username'])
	{
		echo "<script>alert('you have already registered')</script>";
		echo "<script>window.location='userlogin.php';</script>";
	}
	else{   
    
    $sql="INSERT INTO userregister values(DEFAULT,'$firstname','$lastname','$age','$Gender','$user','$phonenumber','$passwd','$security_question','$security_answer')";
    mysql_query($sql);
    echo "<script>alert('you have successfully registered')</script>";
    echo "<script>window.location='userlogin.php';</script>";
}
?>
