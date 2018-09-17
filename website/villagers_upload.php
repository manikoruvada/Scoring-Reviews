<?php
    include "dbconfig.php";
    
   $text="";
   
   $text= $_POST["text"];
   echo $text;
    
    //Upload Profile Picture. 

    $name=$_FILES['file']['name']; 
    echo $name; 
    $temp_name=$_FILES['file']['tmp_name']; 
    $fileext=pathinfo($name,PATHINFO_EXTENSION);
    $ext=strtoupper($fileext);
    echo $ext;
        if($ext=='PNG' || $ext=='JPG'){      
            $location = 'uploads/';    
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
 
                $sql="INSERT INTO uploadfiles (text,profile) 
				values('$text','$name')";
				if(mysql_query($sql))	echo "<script> alert('success');window.location.href='index4.php'</script>";	;		
            }
        }     
        else{
          echo '<script>';
          echo "Unsupported File....!!!";
          echo '</script>';
        }
    //echo "Register Successful.";
    //echo "$name";
?>
