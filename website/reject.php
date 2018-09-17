<?php
	session_start();
	include "dbconfig.php";

	if(!isset($_SESSION['uma'])) header("location:doctorlogin.php");	
?>

<?php
				 $sno= mysql_real_escape_string($_GET['sno']); 
					$sql="UPDATE doctor_appointment SET approval=2 where sno=$sno";
					
					if(mysql_query($sql))
					echo "<script>alert('rejected');window.location.href='doc_view.php'</script>";
					else
					echo "<script>alert('error Occured Try agian..!');window.location.href='doc_view.php'</script>";
					?>
