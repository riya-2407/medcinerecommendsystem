<?php
session_start();

include("Connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    // $Gender= $_POST['gender'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fname,lname,email,pass) values('$firstname','$lastname','$gmail','$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfullt Register')</script>";
    }

    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
    }  

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" >
	<div class="container">
		<div class="img">
			<img src="image/img3.webp">
		</div>

		<div class="login-content">

			<form action="signup.php" method="POST">
				<img src="image/avatar.svg">
				<h2 class="title">Welcome</h2>


           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
                        <input type="text" class="input" name="fname" required>
           		   </div>
           		</div>


           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Last Name</h5>
                        <input type="text" class="input" name="lname"required>
            	   </div>
            	</div>

              <div class="input-div pass">
                <div class="i"> 
                     <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                     <h5>Email</h5>
                     <input type="email" class="input" name="email" required>
             </div>
          </div>

          <div class="input-div pass">
            <div class="i"> 
                 <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                 <h5>Password</h5>
                 <input type="password" class="input" name="pass" required>
         </div>
      </div>
            	
            	<input type="submit" name="" class="btn" value="SignUp">
				<p><a style="text-align: center;" href="login.php"> Already have an account?</a> 
				</p>

            </form>
		
        </div>
		


    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
