<!DOCTYPE HTML>
<html>
	<head>
		<title>welcome</title>
		<style>
      body {
	     background-image:url("pic4.jpg");
       }
       a{
		   position:relative;left:1200px;
		   text-decoration:none;
	   }
	   table{
		     background-color:#98FB98;
		     border-collapse:collapse;
		     
		 }
 </style>
	</head>
	<body>
		<a href="logout.php"><h2>Logout</h2></a>
		<form action="villagers_upload.php" method="post" enctype="multipart/form-data" >
			<table border="1"  cellspacing="30" cellpadding="35" align="center">
				<caption><h1 style="align:center"><center>Welcome</center></h1></caption>
				<tr>
					<td><b><h3>Enter Your Problem:</h3></b></td>
					<td><textarea rows="5" cols="50" name="text" ></textarea></td>
				</tr>
				<tr>
					<td>Choose File : <input type="file" name="file" ></td>
					<td><input type="submit" value="Upload" name="submitfile"></td>
				</tr
			</table>
		</form>
	</body>
</html>
