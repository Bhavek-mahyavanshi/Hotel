<?php

session_start();
include ("connection.php");
//error_reporting(0);




if(isset($_POST['submit']))
{
	
	
	$en = $_POST['email'];
    $ps = $_POST['pswd'];
    
	
	$query = "select * from admin_signup where email='$en' and pswd='$ps'";

	$data = mysqli_query($conn,$query); 
	$row = mysqli_num_rows($data);

	if($row==1)
	{
		
        echo "<script >alert('login succesfully'); </script>";
         
         header("refresh:0 url='index.php'");

		
	}
	else
	{
		 
        echo "<script >alert('invalid user'); </script>";
         
         header("refresh:0 url='admin_login.php'");
	}
}

?>