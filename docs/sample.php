<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="log.css">
	<title>Sample</title>
</head>
<body>

<div class="center">
	<div class="container">
		<div class="text">Administrator| Login</div>
		<form method="POST" action="logincode.php">
			<?php
		
	if(isset($_SESSION ['status']))
	 {
	 	echo "<h8 class ='alert'>".$_SESSION['status']."<h8>";
	 	unset($_SESSION['status']);
	 }
?>
			<div class="data">
				<label>Email</label>
				<input type="text" name="email" placeholder="Enter Your Email" required>
			</div>
			<div class="data">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter Your Password" required>
			</div>
			<div class="forgot-pass"><a href="">Forgot Password?</a></div>
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