<?php 
	session_start();
	include "dbconfig.php";
	
	if(($_SESSION['surp']!=NULL)){
		$user=$_SESSION['surp'];
		
		
		
?>
<html>
	<head>
		<style>
		 a{
		   position:relative;left:1200px;
		   text-decoration:none;
	   }
		<title>surpunch_view </title></style>
	</head>
	<body>
		<a href="slogout.php"><h2>Logout</h2></a><br>
		<a href="surppost.php"><h2>Post to MLA</h2></a>
		
         <center>
		<h2 style="color:blue">Posts</h2>
	<div>
	   <table cellpadding="5" cellspacing="3">
	<tr><th>TEXT:</th>
	<th>PICTURE:</th></tr>
	
	<tbody>
	<?php 
	$sql=mysql_query("SELECT * FROM uploadfiles") or die(mysql_error());
	$row=mysql_fetch_array($sql) or die(mysql_error());
	while($row = mysql_fetch_array($sql)){
	
	?><tr><td><?php echo $row['0'] ?></td>
			<td><img src= 'uploads/<?php echo $row['1'] ?>' height=200 width=200></td></tr><?php } ?>
	</tbody>
	</table>
	</div>
	</center>
	</body>
</html>
<?php
	}else{
		header("Location:surpunch_view.php");
	}
?>




