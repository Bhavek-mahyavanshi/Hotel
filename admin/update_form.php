<?php
include ("connection.php");
$id=$_REQUEST['id'];
error_reporting(0);
?>
<html>
 <head>
 <title>Update Form</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style1.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 <?php
session_start();
?>
 

 <div class="body">
 <section>
<br><br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">

	<h4 class="card-title mt-2">Update Form</h4>
</header>
<article class="card-body">
<form action="admin_database_update.php?id=<?php echo $id;?>" method= "post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
	<div class="form-group">
		<label>Person Name1</label>
		<input type="text" class="form-control"   name="name_1">
		<span class="text-danger font-weight-bold"></span>
		
	</div>
	<div class="form-group">
		<label>Person Name2<small class="form-text text-muted">(Optional)</small></label>
		<input type="text" class="form-control"   name="name_2">
		<span class="text-danger font-weight-bold"></span>
		<small class="form-text text-muted">Enter if person is available.</small>
	</div>
	

		
	<div class="form-group">
		<label>Room Type</label>
		<select class="form-control" name="room_type">
    	<option selected>Choose...</option>
	    <option value="1">non-ac-1200/day</option>
	    <option value="2">Delux-2400/day</option>
	    <option value="3">Super-Delux-3500/day</option>
	  </select>
	  <small class="form-text text-muted">We have room for max 2 people.</small>
	</div>
		<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Check-In</label>
		  <input type="date" class="form-control" name="check_in" >
		  	<span id="doberror" class="text-danger font-weight-bold"></span>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Check-Out</label>
		  <input type="date" class="form-control" name="check_out" >
		  	<span id="doberror" class="text-danger font-weight-bold"></span>
		</div> <!-- form-group end.// -->
	</div> 
	
	<div class="form-group">
		<label>Id Proof No:</label>
		<input type="text" class="form-control"   name="id_no">
		<span class="text-danger font-weight-bold"></span>
		
	</div>
  <div class="form-group">
  	<label for="comment">Permanent Address</label>
  	<textarea class="form-control" rows="5" id="comment" name="address"></textarea>
	</div>
  <div class="but card-body">
					<input type="submit" name="submit" value="Update"class="btn btn-primary btn-block">
            				
				</div>
</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
</section>


 </div>
 
 
 </div>
 
 
 
 
 
 </body>
 </html>