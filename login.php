<?php
session_start();

include("Connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from form where email = '$gmail' limit 1";
        $result = mysqli_query($con, $query);

        echo '$result';

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header('Location:index.html');


                }
            }
        }

        echo "<script type='text/javascript'> alert('login success')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong user or password')</script>";
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
	<img class="wave">
	<div class="container">
		<div class="img">
			<img src="image/img3.webp">
		</div>

		<div class="login-content">

			<form  method="POST">
				<img src="image/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>


           		   <div class="div">
           		   		<h5>Username</h5>
					    <input type="email" name="email" class="input" required>
           		   </div>				   
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
						<input type="password" name="pass" class="input" required>
            	   </div>

            	</div>           	
            	<input type="submit" name="" class="btn" value="Login">
				<p><a style="text-align: center;" href="signup.php">No account? Sign Up here!</a> 
				</p>

            </form>
		
        </div>
		


    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
