<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        .card {
            background-image: linear-gradient(to right, lightblue, white);
            position: center;
            margin: 100px;
        }

        .bod {
            background-image: linear-gradient(to right, white, lightblue);
           
        }
        .div-box {
            background-image: linear-gradient(to right, white, lightblue);
			width: 720px;
			z-index: -1;
			box-shadow: 0px 0px 10px 10px rgba();
			padding: 10px;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			margin: 2px;
		}
        .but{
			text-align: center;
        }
        
    </style>
</head>

<body>
<?php

session_start();
?>
 
        <div class="container">
                <div class="div-box">
            <h1>Admin Login</h1>

            <form name="myForm" action="admin_dblogin.php" method= "post" onsubmit="return(validate());">
                <div class="card-body">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

                    <div class="card-body">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div class="but card-body">
                     <input type="submit" name="submit" value="login"class="btn btn-primary btn-block"> 
                    </div>
					
				</div>
                    <script>
                        function validate() {

                            if (document.myForm.email.value == "") {
                                alert("Please provide your Email!");
                                document.myForm.email.focus();
                                return false;
                            }
                            if (document.myForm.pwd.value == "") {
                                alert("Please provide your Password!");
                                document.myForm.pwd.focus();
                                return false;
                            }
                            function emailval() {
                                var emailID = document.myForm.email.value;
                                atpos = emailID.indexOf("@");
                                dotpos = emailID.lastIndexOf(".");

                                if (atpos < 1 || (dotpos - atpos < 2)) {
                                    alert("Please enter correct email ID")
                                    document.myForm.focus();
                                    return false;
                                }
                                return (true);
                            }
                        }
                    </script>
            </form>

        </div>
    </div>


</body>

</html>