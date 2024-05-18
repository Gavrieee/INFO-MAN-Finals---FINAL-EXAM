<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		.center {
			margin: 0 auto;
			max-width: 600px; /* Optional: Adjust the maximum width as per your preference */
			padding: 20px; /* Optional: Add padding for better readability */
			text-align: center; /* Add text alignment justification */
			font-family: Arial, sans-serif; /* Change the font family */
			background-color: indianred;
			border: 5px;
			padding: 10px; /* Padding around the text */
	        margin: 25px auto; /* Top margin and horizontally centered */
	        width: 30%; /* Width of the div */
	        box-sizing: border-box; /* Include padding and border in the width */
	        border-radius: 32px; /* Rounded corners */
	        text-align: center;
	        color: floralwhite;
			}
		h6 {
			font-weight: normal;
		}
		body {
			background-color: floralwhite;
		}
		a {
        color: floralwhite; /* Normal link color */
        text-decoration: none; /* Remove underline */
	    }
	    a:visited {
	        color: floralwhite; /* Visited link color */
	    }
	    a:hover {
	        color: floralwhite; /* Hover link color */
	        text-decoration: underline; /* Underline on hover */
	    }
	    a:active {
	        color: grey; /* Active link color */
	    }
	</style>
</head>
<body>
	<div class="center">

		<h3>Login</h3>
	<form action="handleForm.php" method="POST">
		<div class="fields">
			<p>Username: <input type="text" placeholder="" class="fields" name="username"></p>
			<p>Password: <input type="password" placeholder="" class="fields" name="password"></p>
			<p><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
		</div>
	</form>
	<p><h6>No account yet? Click here to <b><a href="register.php">Register</a></b>.</h6></p>
    </div>
	
</body>
</html>