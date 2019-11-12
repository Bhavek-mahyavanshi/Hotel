
<!DOCTYPE>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php 
session_start();

?>
<br>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img src="logo1.jpg" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                     Admin Pannel<b>
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>7/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="client-tab" data-toggle="tab" href="#client" role="tab" aria-controls="client" aria-selected="false">Client</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>-->
                      <a href="admin_login.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">PHP, Bootstrap</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card shadow mb-4">
                                       <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Bhavek Mahyavanshi</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>info@hoteldream.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>9537634661</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Role</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Admin </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Client Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Booking Id</th>
                      <th>Person 1</th>
                      <th>Person 2</th>
                      <th>Email</th>
                      <th>Room Type</th>
                      <th>Check in</th>
                      <th>Check out</th>
                      <th>id no</th>
                      <th>address</th>
                      <th>update</th>
					  <th>delete</th>

                    </tr>
                  </thead>
                   <?php
                     include("connection.php");
                    $query = "select * from booking";
                    $data = mysqli_query($conn,$query);
                      $i=1;
                    while($result = mysqli_fetch_array($data))
                    { $i++;
                        ?>
                        <tbody>
                            <tr>
                                <td>$i</td>
                              <td><?php echo $result['id']?></td>
                              <td><?php echo $result['name_1'] ?></td>
                              <td><?php echo $result['name_2']?></td>
                              <td><?php echo $result['email']?></td>
                              <td><?php echo $result['room_type']?></td>
                              <td><?php echo $result['check_in']?></td>
                              <td><?php echo $result['check_out']?></td>
                              <td><?php echo $result['id_no']?></td>
							   <td><?php echo $result['address']?></td>

                              <td><button type="button" class="btn btn-warning btn-sm"><a href="update_form.php?id=<?php echo $result['id'];?>">Update</a></button></td>
                              <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Are You Sure To Delete Data?')"><a href="admin_database_delete.php?id=<?php echo $result['id'];?>">Delete</a></button></td>
                            </tr>
                         </tbody>
                         <?php
                    }
                ?>
                  
                </table>
              </div>
            </div>
          </div>

            </div>
          </div>
         </div>
      </div>
      </form>           
     </div>
    </body>
    </html>
