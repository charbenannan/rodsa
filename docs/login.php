<?php
session_start();
if (isset($_SESSION['verified_user_id'])) 
{
	 $_SESSION ['status']= "You are already logged in ";
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RODSA</title>
	<link rel="stylesheet" type="text/css" href="log.css">
	
</head>
<body>
	<div class="rodsa-header">
		<span id="rodsa-logo">RODSA </span>
	<?php
	echo "<p><h1>Road Digital Safety Assurance </h1></p>";
	echo "<hr>";
	
	
	?>
	
</div>


	
<div class="center">
	<div class="container">
		<?php
		
	if(isset($_SESSION ['status']))
	 {
	 	echo "<h8 class ='alert alert-success' >".$_SESSION['status']."<h8>";
	 	unset($_SESSION['status']);
	 }
?>
		<div class="text">Administrator| Login</div>
		<form method="POST" action="logincode.php">
			
			<div class="data">
				<label>Email:</label>
				<input type="text" name="email" placeholder="Enter Your Email" required>
			</div>
			<div class="data">
				<label>Password:</label>
				<input type="password" name="password" placeholder="Enter Your Password" required>
			</div>
			<div class="forgot-pass"><a href="#">Forgot Password?</a></div>
			<div class="btn">
				<div class="inner"></div>
				<button type="submit" name="login_btn">Login</button>
			</div>
			<div class="signup-link">Station isn't Registered? <a href="signup.php">Signup</a></div>
		</form>
	</div>
</div>	
</body>
</html>