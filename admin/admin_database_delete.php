<?php
include("connection.php");


$id=$_REQUEST['id'];
 

     $query ="delete from booking where id=".$id;
      $data = mysqli_query($conn,$query);

    
      if($data)
      {

      echo"<script>alert('Deleted successfully')</script>";
        
        header("refresh:0 url='index.php'");   
      }
    ?> 
  