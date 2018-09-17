<?php 
	session_start();
	include "dbconfig.php";
	
	if(($_SESSION['uma']!=NULL)){
		$user=$_SESSION['uma'];
		
		
		
?>
<html>
	<head>
		<style>
		 a{
		   position:relative;left:1200px;
		   text-decoration:none;
	   }
		
         <center>
		<h2 style="color:blue">Posts</h2>
	<div>
	   <table cellpadding="5" cellspacing="3">
	<tr><th>TEXT:</th>
	<th>PICTURE:</th></tr>
	
	<tbody>
	<?php 
	$sql=mysql_query("SELECT * FROM uploadfile username='$user'") or die(mysql_error());
	$row=mysql_fetch_array($sql) or die(mysql_error());
	while($row = mysql_fetch_array($sql)){
	
	?><tr><td><?php echo $row['1'] ?></td>
			<td><img src= 'uploads/<?php echo $row['2'] ?>' height=200 width=200></td></tr><?php } ?>
	</tbody>
	</table>
	</div>
	</center>
	</body>
</html>
<?php
	}else{
		header("Location:onlinestorage.html");
	}

?>
