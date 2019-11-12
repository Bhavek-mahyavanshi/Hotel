<?php
session_start();
include("connection.php");

  
  

  //header("location:admin_signup.php");

  if($_POST['submit'])
{

	$fn = $_POST['name_1'];
	$pn = $_POST['name_2'];
	
    $rn = $_POST['room_type'];
	$ci = $_POST['check_in'];
	$co = $_POST['check_out'];

	$in = $_POST['id_no'];
	$an = $_POST['address'];
    $id=$_REQUEST['id'];   

     $query ="update booking set name_1='$fn',name_2='$pn',room_type='$rn',check_in='$ci',check_out='$co',id_no='$in',address='$an' where id='$id'";
      $data = mysqli_query($conn,$query);
    //  $row=mysqli_num_rows($data);
    
      if($data)
      {

		echo"<script>alert('details updated successfully')</script>";
        //header("location:page.php");
        header("refresh:0 url='index.php'");   
      }
     
  }
  ?>